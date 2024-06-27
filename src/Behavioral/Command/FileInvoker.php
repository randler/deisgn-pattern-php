<?php

namespace App\Behavioral\Command;

use App\Behavioral\Command\Interfaces\Command;

final class FileInvoker
{
    private Command $command;

    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function execute(): string
    {
        return $this->command->execute();
    }
}