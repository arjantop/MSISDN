<?php

namespace MSISDN;

class Parser
{
    public function parseNumber($msisdn)
    {
        if (strlen($msisdn) == 0) {
            throw new \LengthException("Unexpected empty input");
        }
        if ($msisdn[0] != '+') {
            throw new \InvalidArgumentException("International prefix plus (+) sign is required");
        }
        $extractor = new \MSISDN\Country\InfoExtractor();
        $countryInfo = $extractor->extractCountryInfo(substr($msisdn, 1));
        $subscriberNumber = substr($msisdn, strlen($countryInfo->getDialingCode()) + 1);

        return new NumberInfo(
            $countryInfo->getDialingCode(),
            $subscriberNumber,
            $countryInfo->getIdentifier()
        );
    }
}
