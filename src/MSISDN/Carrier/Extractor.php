<?php

namespace MSISDN\Carrier;

/**
 * Class for extracting carrier information from the subscriber number.
 */
class Extractor
{
    /**
     * Extracts carrier nume from the subscriber number from a specified country.
     *
     * @return string|null Carrier name or null if no carrier was found for the number.
     */
    public function getCarrier($countryCode, $subscriberNumber)
    {
        $fsm = new \MSISDN\Carrier\CarrierFsm($countryCode);
        for ($i=0; $i<strlen($subscriberNumber); $i++) {
            try {
                $fsm->transition((int)$subscriberNumber[$i]);

                if ($fsm->isFinalState()) {
                    return $fsm->getFinalState();
                }
            } catch (\LogicException $e) {
                break;
            }
        }
        return null;
    }
}
