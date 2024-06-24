<?php

namespace App\Behavioral\State\Context;

abstract class State
{
    protected Context $context;

    public function setContext(Context $context): void
    {
        $this->context = $context;
    }

    abstract public function getState(): string;

    abstract public function handleInitState(): void;

    abstract public function handleChangeState(): void;
}