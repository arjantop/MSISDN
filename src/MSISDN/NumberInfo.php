<?php

namespace MSISDN;

class NumberInfo
{
    private $countryDialingCode;

    private $subscriberNumber;

    private $countryIdentifier;

    private $carrier;

    public function __construct($countryDialingCode, $subscriberNumber, $countryIdentifier, $carrier)
    {
        $this->countryDialingCode = $countryDialingCode;
        $this->subscriberNumber = $subscriberNumber;
        $this->countryIdentifier = $countryIdentifier;
        $this->carrier = $carrier;
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

    public function getCarrier()
    {
        return $this->carrier;
    }
}
