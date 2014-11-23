#!/usr/bin/env bash

ROOT=$(dirname $0)/..

composer install --working-dir=$ROOT &&
sh $ROOT/scripts/style.sh &&
sh $ROOT/scripts/test.sh
