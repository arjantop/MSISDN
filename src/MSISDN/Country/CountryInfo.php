<?php

namespace MSISDN\Country;

/**
 * Class holds the country information of the MSISDN number.
 */
class CountryInfo
{
    /**
     * @var string $dialingCode The country calling code.
     */
    private $dialingCode;

    /**
     * @var string Tho letter country code (ISO 3166-1 alpha-2).
     */
    private $identifier;

    /**
     * Constructs a new CountryInfo with the given values.
     *
     * @see CountryInfo::$dialingCode
     * @see CountryInfo::$identifier
     *
     * @param string $dialingCode
     * @param string $identifier
     */
    public function __construct($dialingCode, $identifier)
    {
        $this->dialingCode = $dialingCode;
        $this->identifier = $identifier;
    }

    /**
     * Returns a country calling code.
     *
     * @return string
     */
    public function getDialingCode()
    {
        return $this->dialingCode;
    }

    /**
     * Returns a two-letter country code.
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }
}
