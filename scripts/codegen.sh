#!/usr/bin/env bash

GEN_DIR=gen/Gen
DST_COUNTRY=$GEN_DIR/Country
DST_CARRIER=$GEN_DIR/Carrier

mkdir -p tmp
svn checkout http://libphonenumber.googlecode.com/svn/trunk/ tmp/libphonenumber-read-only

mkdir -p $DST_COUNTRY &&
php scripts/gen/countrycodes.php | sed -E "s/[[:space:]]$//" > $DST_COUNTRY/CountryCodeFsm.php &&
mkdir -p $DST_CARRIER &&
php scripts/gen/carriers.php | sed -E "s/[[:space:]]$//" > $DST_CARRIER/CarrierFsm.php
