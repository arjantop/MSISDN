<?php

class CarrierFsmTest extends PHPUnit_Framework_TestCase
{
    public function testFsmFinalState()
    {
        $fsm = new \MSISDN\Carrier\CarrierFsm('386');
        $this->assertFalse($fsm->isFinalState());
        $fsm->transition(4);
        $this->assertFalse($fsm->isFinalState());
        $fsm->transition(0);
        $this->assertTrue($fsm->isFinalState());
        $this->assertEquals('Si.mobil', $fsm->getFinalState());
    }

    /**
     * @expectedException LogicException
     */
    public function testFsmInvalidCountryCode()
    {
        $fsm = new \MSISDN\Carrier\CarrierFsm('11');
        $fsm->transition(4);
    }
}
