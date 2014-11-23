<?php

namespace MSISDN;

/**
 * Class represents collected information for a MSISDN number.
 */
class NumberInfo
{
    /**
     * @var string Country calling code value.
     */
    private $countryDialingCode;

    /**
     * @var string Subscriber number without country calling code.
     */
    private $subscriberNumber;

    /**
     * @var string ISO 3166-1 alpha-2 country code to which the number belongs.
     */
    private $countryIdentifier;

    /**
     * @var string|null Carrier name to which the number belongs (original carrier ignoring number portability).
     */
    private $carrier;

    /**
     * Constructs a new NumberInfo with the specified values.
     *
     * @param string $countryDialingCode
     * @param string $subscriberNumber
     * @param string $countryIdentifier
     * @param string|null $carrier
     */
    public function __construct($countryDialingCode, $subscriberNumber, $countryIdentifier, $carrier)
    {
        $this->countryDialingCode = $countryDialingCode;
        $this->subscriberNumber = $subscriberNumber;
        $this->countryIdentifier = $countryIdentifier;
        $this->carrier = $carrier;
    }

    /**
     * Returns country calling code.
     *
     * @see numberInfo::$countryDialingCode
     *
     * @return string
     */
    public function getCountryDialingCode()
    {
        return $this->countryDialingCode;
    }

    /**
     * Returns the subscriber number.
     *
     * @see numberInfo::$subscriberNumber
     *
     * @return string
     */
    public function getSubscriberNumber()
    {
        return $this->subscriberNumber;
    }

    /**
     * Returns the country identifier.
     *
     * @see numberInfo::$countryIdentifier
     *
     * @return string
     */
    public function getCountryIdentifier()
    {
        return $this->countryIdentifier;
    }

    /**
     * Returns the carrier name.
     *
     * @see numberInfo::$carrier
     *
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Converts contained data to an associative array.
     *
     * All the data is always included except for carrier name that is not in
     * case of the value being null.
     *
     * @return array
     */
    public function toArray()
    {
        $result = [
            'dialingCode' => $this->getCountryDialingCode(),
            'subscriberNumber' => $this->getSubscriberNumber(),
            'countryIdentifier' => $this->getCountryIdentifier(),
        ];
        if ($this->getCarrier() != null) {
            $result['carrierName'] = $this->getCarrier();
        }
        return $result;
    }
}
