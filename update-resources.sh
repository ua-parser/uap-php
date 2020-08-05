#! /bin/bash
if [ -z "$UPDATE_RESOURCES" ]; then
    echo "Skipping resource updates"
    exit 0
fi

function try_catch() {
    output=`"$@" &>/dev/stdout`
    if [ $? -gt 0 ]; then
        echo -e "Command $@ failed\n\n$output"
        exit 1
    fi
}

try_catch git submodule foreach git pull origin master
try_catch php bin/uaparser ua-parser:convert uap-core/regexes.yaml
try_catch php vendor/bin/phpunit --stop-on-failure
try_catch git config --global user.email travis@travis-ci.org
try_catch git config --global user.name "Travis CI"
git status
env
exit
git commit -a -m "Scheduled resource update"
if [ $? -gt 0 ]; then
    rev=$(git rev-parse --short HEAD)
    try_catch git push origin master
    new_version=`git tag | sort --version-sort | tail -n 1 | awk -F. -v OFS=. 'NF==1{print ++$NF}; NF>1{if(length($NF+1)>length($NF))$(NF-1)++; $NF=sprintf("%0*d", length($NF), ($NF+1)%(10^length($NF))); print}'`
    try_catch git tag $new_version
    git push origin $new_version
    echo "$new_version published"
else
    echo "No resource update necessary"
fi
