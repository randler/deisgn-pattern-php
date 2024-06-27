<?php

namespace App\Behavioral\Command\Interfaces;

interface Command
{
    public function execute(): string;
}