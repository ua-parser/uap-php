#! /bin/bash
set -x
set -e

if [ "$UPDATE_RESOURCES" != "true" ]; then
    echo "Skip updating resources. UPDATE_RESOURCES not set to true"
    exit 0
fi

if git diff-index --quiet HEAD; then
    git config --global user.email travis@travis-ci.org
    git config --global user.name "Travis CI"

    git remote add upstream https://${GITHUB_TOKEN}@github.com/your_username/your_repo.git git

    git commit -a -m "Automatic resource update"
    git push upstream ${TRAVIS_BRANCH}
    new_version=`git tag | sort --version-sort | tail -n 1 | awk -F. -v OFS=. 'NF==1{print ++$NF}; NF>1{if(length($NF+1)>length($NF))$(NF-1)++; $NF=sprintf("%0*d", length($NF), ($NF+1)%(10^length($NF))); print}'`
    git tag test-$new_version
    git push upstream test-$new_version

    echo "$new_version published"
else
    echo "No resource update necessary"
fi
