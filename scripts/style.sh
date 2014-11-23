#/usr/bin/env bash

ROOT=$(dirname $0)/..
SRC=$ROOT/src

find $SRC -name '*.php' | xargs -i php -l {} &&
$ROOT/vendor/bin/phpcs --standard=PSR2 $SRC &&
$ROOT/vendor/bin/phpmd $SRC text codesize,design,naming,unusedcode,controversial --strict &&
$ROOT/vendor/bin/phpcpd --min-lines 3 --min-tokens 50 $SRC
