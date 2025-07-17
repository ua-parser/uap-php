#! /bin/bash
set -x
set -e

git submodule foreach git pull origin master --ff-only
bin/uaparser ua-parser:convert uap-core/regexes.yaml

if [[ ! `git status --porcelain` ]]; then
    echo "No resource update necessary"
else
    ./vendor/bin/phpunit

    git config --global user.email 'github-actions[bot]@users.noreply.github.com'
    git config --global user.name "github-actions[bot]"

    git fetch --tags

    git status

    git commit -m "Automatic resource update" uap-core resources/regexes.php
    git push

    new_version=`git tag | sort --version-sort | tail -n 1 | awk -F. -v OFS=. 'NF==1{print ++$NF}; NF>1{if(length($NF+1)>length($NF))$(NF-1)++; $NF=sprintf("%0*d", length($NF), ($NF+1)%(10^length($NF))); print}'`

    git tag $new_version
    git push --tags

    echo "$new_version published"
fi
