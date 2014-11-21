#!/usr/bin/env bash

DST=src/MSISDN/Country

mkdir -p tmp
svn checkout http://libphonenumber.googlecode.com/svn/trunk/ tmp/libphonenumber-read-only

mkdir -p $DST &&
php scripts/gen/countrycodes.php | sed -E "s/[[:space:]]$//" > $DST/CountryCodeFsm.php
