<?php

namespace Gen\Carrier;

class CarrierFsm extends \Util\Fsm
{
    public function __construct($dialingCode)
    {
        if (!array_key_exists($dialingCode, self::$fsmArray)) {
            $this->currentState = [];
        } else {
            $this->currentState = &self::$fsmArray[$dialingCode];
        }
    }

    private static $fsmArray = 
