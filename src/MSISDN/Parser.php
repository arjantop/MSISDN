<?php

namespace MSISDN;

/**
 * Implementation of parsing MSISDN numbers and extracting useful information.
 */
class Parser
{
    /**
     * Function takes a valid MSISDN number and returns the extracted information for it.
     *
     * @throws LengthException if the input number is empty.
     * @throws InvalidArgumentException if the input number is missing a prefix +.
     *
     * @param string $msisdn Valid MSISDN number with + prefix (eg. +38640123456).
     * @return NumberInfo Extracted information of the input number.
     */
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

        $carrierExtractor = new \MSISDN\Carrier\Extractor;

        return new NumberInfo(
            $countryInfo->getDialingCode(),
            $subscriberNumber,
            $countryInfo->getIdentifier(),
            $carrierExtractor->getCarrier($countryInfo->getDialingCode(), $subscriberNumber)
        );
    }
}
