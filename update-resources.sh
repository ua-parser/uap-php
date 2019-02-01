#! /bin/bash
git pull --quiet
git submodule --quiet foreach git pull --quiet
bin/uaparser ua-parser:update
output=`vendor/bin/phpunit --stop-on-failure &> /dev/stdout`
if [ $? -eq 0 ] ; then
    git commit --quiet -a -m "Scheduled resource update" && \
        git push --quiet origin master && \
        new_version=`git tag | sort --version-sort | tail -n 1 | awk -F. -v OFS=. 'NF==1{print ++$NF}; NF>1{if(length($NF+1)>length($NF))$(NF-1)++; $NF=sprintf("%0*d", length($NF), ($NF+1)%(10^length($NF))); print}'` && \
        git tag $new_version && git push origin $new_version
else
    echo "Could not update resources"
    echo
    echo "$output"
fi
