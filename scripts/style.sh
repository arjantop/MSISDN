#/usr/bin/env bash

find ./src -name '*.php' | xargs -i php -l {} &&
./vendor/bin/phpcs --standard=PSR2 src/ &&
./vendor/bin/phpmd src/ text codesize,design,naming,unusedcode,controversial --strict &&
./vendor/bin/phpcpd --min-lines 3 --min-tokens 50 src/
