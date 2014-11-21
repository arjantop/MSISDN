<?php

namespace MSISDN\Country;

class CountryCodeFsm extends \Util\Fsm
{
    public function __construct()
    {
        $this->currentState = &self::$fsmArray;
    }

    private static $fsmArray =
