<?php

namespace App\Behavioral\Interpreter\Interface;

interface Expression
{
    public function interpret(string $context): string;
}