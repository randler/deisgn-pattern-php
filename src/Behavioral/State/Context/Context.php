<?php

namespace App\Behavioral\State\Context;

class Context
{
    private State $state;

    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }

    public function transitionTo(State $state): void
    {
        echo "Context: Transition to " . get_class($state) . "\n";
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function getState(): string
    {
        return $this->state->getState();
    }

    /**
     * The Context delegates part of its behavior to the current State object.
     */
    public function init(): void
    {
        $this->state->handleInitState();
    }

    public function changeState(): void
    {
        $this->state->handleChangeState();
    }
}