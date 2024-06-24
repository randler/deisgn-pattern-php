<?php

namespace App\Behavioral\State\Request;

use App\Behavioral\State\Context\State;

class EditingDoc extends State
{
    public function handleInitState(): void
    {
        echo "EditingDoc\n";
    }

    public function handleChangeState(): void
    {
        echo "Change state from EditingDoc to SavedDoc.\n";
        $this->context->transitionTo(new SavedDoc());
    }

    public function getState(): string
    {
        return "EditingDoc";
    }
}