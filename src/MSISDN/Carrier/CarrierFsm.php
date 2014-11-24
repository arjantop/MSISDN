<?php

namespace MSISDN\Carrier;

class CarrierFsm extends \Util\Fsm
{
    public function __construct($dialingCode)
    {
        $className = "\Gen\Carrier\Fsm$dialingCode";
        if (!class_exists($className, true)) {
            $this->currentState = [];
        } else {
            $this->currentState = &$className::$fsmArray;
        }
    }
}
