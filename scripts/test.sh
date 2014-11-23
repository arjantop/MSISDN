#!/usr/bin/env bash

ROOT=$(dirname $0)/..

$ROOT/vendor/bin/phpunit --bootstrap $ROOT/vendor/autoload.php $ROOT/tests
