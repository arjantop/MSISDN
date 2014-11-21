<?php

namespace MSISDN;

class NumberInfo
{
    private $countryDialingCode;

    private $subscriberNumber;

    private $countryIdentifier;

    public function __construct($countryDialingCode, $subscriberNumber, $countryIdentifier)
    {
        $this->countryDialingCode = $countryDialingCode;
        $this->subscriberNumber = $subscriberNumber;
        $this->countryIdentifier = $countryIdentifier;
    }

    public function getCountryDialingCode()
    {
        return $this->countryDialingCode;
    }

    public function getSubscriberNumber()
    {
        return $this->subscriberNumber;
    }

    public function getCountryIdentifier()
    {
        return $this->countryIdentifier;
    }
}
