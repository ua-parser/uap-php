#! /bin/bash
set -x
set -e

if [ "$UPDATE_RESOURCES" != "true" ]; then
    echo "Skip updating resources. UPDATE_RESOURCES not set to true"
    exit 0
fi

git config --global user.email travis@travis-ci.org
git config --global user.name "Travis CI"
git status
env
new_version=`git tag | sort --version-sort | tail -n 1 | awk -F. -v OFS=. 'NF==1{print ++$NF}; NF>1{if(length($NF+1)>length($NF))$(NF-1)++; $NF=sprintf("%0*d", length($NF), ($NF+1)%(10^length($NF))); print}'`

echo $new_version

exit

if git diff-index --quiet HEAD; then
    git commit -a -m "Automatic resource update"
    try_catch git push origin master
    new_version=`git tag | sort --version-sort | tail -n 1 | awk -F. -v OFS=. 'NF==1{print ++$NF}; NF>1{if(length($NF+1)>length($NF))$(NF-1)++; $NF=sprintf("%0*d", length($NF), ($NF+1)%(10^length($NF))); print}'`
    try_catch git tag $new_version
    git push origin $new_version
    echo "$new_version published"
else
    echo "No resource update necessary"
fi
