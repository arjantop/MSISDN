#!/usr/bin/env bash

DST_COUNTRY=src/MSISDN/Country
DST_CARRIER=src/MSISDN/Carrier

mkdir -p tmp
svn checkout http://libphonenumber.googlecode.com/svn/trunk/ tmp/libphonenumber-read-only

mkdir -p $DST_COUNTRY &&
php scripts/gen/countrycodes.php | sed -E "s/[[:space:]]$//" > $DST_COUNTRY/CountryCodeFsm.php &&
mkdir -p $DST_CARRIER &&
php scripts/gen/carriers.php | sed -E "s/[[:space:]]$//" > $DST_CARRIER/CarrierFsm.php
