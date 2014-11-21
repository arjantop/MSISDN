<?php

namespace MSISDN\Country;

class CountryCodeFsm
{
    private $currentState;

    public function __construct()
    {
        global $fsmArray;
        $this->currentState = &$fsmArray;
    }

    public function transition($state)
    {
        if (!is_string($this->currentState) && array_key_exists($state, $this->currentState)) {
            $this->currentState = &$this->currentState[$state];
        } else {
            throw new \Exception("Invalid state.");
        }
    }

    public function getFinalState()
    {
        if (!$this->isFinalState()) {
            throw new \Exception("invalid final state.");
        }
        return $this->currentState;
    }

    public function isFinalState()
    {
        return is_string($this->currentState);
    }

    private static $fsmArray =
