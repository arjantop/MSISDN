<?php

class FsmImpl extends \Util\Fsm
{
    public function __construct()
    {
        $this->currentState = [0 => [1 => 'A', 2 => 'B'], 3 => 'C'];
    }
}

class FsmTest extends PHPUnit_Framework_TestCase
{
    private $fsm;

    public function setUp()
    {
        $this->fsm = new FsmImpl;
    }

    public function testTransitionToFinalState()
    {
        $this->assertFalse($this->fsm->isFinalState());
        $this->fsm->transition(0);
        $this->assertFalse($this->fsm->isFinalState());
        $this->fsm->transition(1);
        $this->assertTrue($this->fsm->isFinalState());
        $this->assertEquals('A', $this->fsm->getFinalState());
    }

    /**
     * @expectedException LogicException
     */
    public function testTransitionAfterFinalStateError()
    {
        $this->fsm->transition(3);
        $this->fsm->transition(1);
    }

    /**
     * @expectedException LogicException
     */
    public function testTransitionToInvalidStateException()
    {
        $this->fsm->transition(0);
        $this->fsm->transition(3);
    }

    /**
     * @expectedException LogicException
     */
    public function testGetFinalStateInNonFinalStateException()
    {
        $this->fsm->transition(0);
        $this->fsm->getFinalState();
    }
}
