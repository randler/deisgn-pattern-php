<?php

namespace App\Behavioral\State\Request;

use App\Behavioral\State\Context\State;

class CreatedDoc extends State
{
    public function handleChangeState(): void
    {
        echo "Change state from CreatedDoc to EditingDoc.\n";
        $this->context->transitionTo(new EditingDoc());
    }

    public function handleInitState(): void
    {
        echo "CreatedDoc.\n";
    }

    public function getState(): string
    {
        return "CreatedDoc";
    }
}