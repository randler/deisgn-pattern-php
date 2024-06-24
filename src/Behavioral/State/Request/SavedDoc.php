<?php

namespace App\Behavioral\State\Request;

use App\Behavioral\State\Context\State;

class SavedDoc extends State
{
    public function handleInitState(): void
    {
        echo "SavedDoc.\n";
    }

    public function handleChangeState(): void
    {
        echo "ConcreteStateB handles request2.\n";
        echo "ConcreteStateB wants to change the state of the context.\n";
        $this->context->transitionTo(new FinishedDoc());
    }

    public function getState(): string
    {
        return "SavedDoc";
    }
}