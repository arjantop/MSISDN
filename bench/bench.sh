#!/usr/bin/env bash

ROOT=$(dirname $0)/..

wrk -t12 -c400 -d30s -s $ROOT/bench/request.lua http://localhost:8080
