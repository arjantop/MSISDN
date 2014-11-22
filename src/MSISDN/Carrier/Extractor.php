<?php

namespace MSISDN\Carrier;

class Extractor
{
    public function getCarrier($countryCode, $subscriberNumber)
    {
        $fsm = new \Gen\Carrier\CarrierFsm($countryCode);
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
