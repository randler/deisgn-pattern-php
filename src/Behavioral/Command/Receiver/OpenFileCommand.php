<?php

namespace App\Behavioral\Command\Receiver;

use App\Behavioral\Command\Interfaces\Command;
use App\Behavioral\Command\Interfaces\FileSystem;

final class OpenFileCommand implements Command
{
    private FileSystem $fileSystem;

    public function __construct(FileSystem $fileSystem)
    {
        $this->fileSystem = $fileSystem;
    }

    public function execute(): string
    {
        return $this->fileSystem->openFile();
    }
}