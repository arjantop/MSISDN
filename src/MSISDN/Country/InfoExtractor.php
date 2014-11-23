<?php

namespace MSISDN\Country;

/**
 * Class for extracting country information from valid MSISDN numbers.
 */
class InfoExtractor
{
    /**
     * Extracts the country code (ISO 3166-1 alpha-2) and country calling code from
     * the input number.
     *
     * @throws InvalidArgumentException if there was a problem extracting the information.
     *
     * @param string $msisdn Valid MSISDN number without the + prefix.
     * @return CountryInfo Extracted country information.
     */
    public function extractCountryInfo($msisdn)
    {
        $dialingCode = [];
        $fsm = new \Gen\Country\CountryCodeFsm;
        for ($i=0; $i<strlen($msisdn); $i++) {
            $digit = $msisdn[$i];

            try {
                // Transition the fsm and add the current digit to the dialing code.
                $fsm->transition((int)$digit);
                array_push($dialingCode, $digit);

                // If we are in the final state return the result.
                if ($fsm->isFinalState()) {
                    return new CountryInfo(join('', $dialingCode), $fsm->getFinalState());
                }
            } catch (\LogicException $e) {
                break;
            }
        }
        // Either exception in fsm happened or we reached the end of input string.
        throw new \InvalidArgumentException("Unrecognized country code.");
    }
}
