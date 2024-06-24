<?php

namespace App\Behavioral\State\Request;

use App\Behavioral\State\Context\State;

class FinishedDoc extends State
{
    public function handleInitState(): void
    {
        echo "FinidhedDoc.\n";
    }

    public function handleChangeState(): void
    {
        echo "FinidhedDoc.\n";
        throw new \Exception("FinishedDoc can't change state.");
    }

    public function getState(): string
    {
        return "FinishedDoc";
    }
}