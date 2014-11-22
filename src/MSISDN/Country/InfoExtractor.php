<?php

namespace MSISDN\Country;

class InfoExtractor
{
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
