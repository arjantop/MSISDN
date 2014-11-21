<?php

class CountryCodeFsmTest extends PHPUnit_Framework_TestCase
{
    private $fsm;

    public function setUp()
    {
        $this->fsm = new \MSISDN\Country\CountryCodeFsm;
    }

    public function testFsmFinalState()
    {
        $this->assertFalse($this->fsm->isFinalState());
        $this->fsm->transition(2);
        $this->assertFalse($this->fsm->isFinalState());
        $this->fsm->transition(4);
        $this->assertFalse($this->fsm->isFinalState());
        $this->fsm->transition(7);
        $this->assertTrue($this->fsm->isFinalState());
        $this->assertEquals('AC', $this->fsm->getFinalState());
    }

    /**
     * @expectedException LogicException
     */
    public function testTransitionToInvalidStateException()
    {
        $this->fsm->transition(2);
        $this->fsm->transition(1);
        $this->fsm->transition(5);
    }

    /**
     * @expectedException LogicException
     */
    public function testGetFinalStateInNonFinalStateException()
    {
        $this->fsm->transition(2);
        $this->fsm->getFinalState();
    }
}
