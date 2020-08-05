#/bin/bash
set -x
set -e

if [ "$UPDATE_RESOURCES" != "true" ]; then
    echo "Skip updating resources. UPDATE_RESOURCES not set to true"
    exit 0
fi

git submodule foreach git pull origin master --ff-only
bin/uaparser ua-parser:convert uap-core/regexes.yaml
