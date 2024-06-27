<?php

namespace App\Behavioral\Command\Receiver;

use App\Behavioral\Command\Interfaces\Command;
use App\Behavioral\Command\Interfaces\FileSystem;

final class WriteFileCommand implements Command
{
    private FileSystem $fileSystem;

    public function __construct(
        FileSystem $fileSystem,
        private string $content)
    {
        $this->fileSystem = $fileSystem;
    }

    public function execute(): string
    {
        return $this->fileSystem->writeFile($this->content);
    }
}
