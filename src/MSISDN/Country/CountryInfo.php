<?php

namespace MSISDN\Country;

class CountryInfo
{
    private $dialingCode;

    private $identifier;

    public function __construct($dialingCode, $identifier)
    {
        $this->dialingCode = $dialingCode;
        $this->identifier = $identifier;
    }

    public function getDialingCode()
    {
        return $this->dialingCode;
    }

    public function getIdentifier()
    {
        return $this->identifier;
    }
}
