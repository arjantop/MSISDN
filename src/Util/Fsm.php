<?php

namespace Util;

/**
 * Base class for a simple Finite State Machine backed by an array.
 * Subsclasses are expected to provide only a constructor that initializes the
 * $current state variable.
 */
abstract class Fsm
{
    /**
     * The state is a string if the state is final or an associative array
     * of which keys represent valid transitions ffrom the current state.
     *
     * @var array|string Current state of the FSM.
     */
    protected $currentState;

    /**
     * Transition the FSM to a chosen state.
     *
     * @throws LogicException if the chosen state transition is invalid.
     *
     * @param string Wanted state that we wish to transition to.
     */
    public function transition($state)
    {
        if (!is_string($this->currentState) && array_key_exists($state, $this->currentState)) {
            $this->currentState = &$this->currentState[$state];
        } else {
            throw new \LogicException("Invalid state.");
        }
    }

    /**
     * Returns the final state of the FSM.
     *
     * @throws LogicException if the FSM is not in the final state.
     *
     * @return string Final state value.
     */
    public function getFinalState()
    {
        if (!$this->isFinalState()) {
            throw new \LogicException("invalid final state.");
        }
        return $this->currentState;
    }

    /**
     * Returns true if the FSM is in the final state.
     *
     * @return bool
     */
    public function isFinalState()
    {
        return is_string($this->currentState);
    }
}
