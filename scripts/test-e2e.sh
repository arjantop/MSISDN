#!/usr/bin/env bash

ROOT=$(dirname $0)/..

sh $ROOT/scripts/build.sh &&
vagrant up &&
$ROOT/vendor/bin/phpunit --bootstrap $ROOT/vendor/autoload.php $ROOT/tests/e2e
