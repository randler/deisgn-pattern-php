<?php

namespace App\Behavioral\Command;

use App\Behavioral\Command\Interfaces\FileSystem;

final class UnixFileSystem implements FileSystem
{
    private string $fileName = 'file.sh';

    public function openFile(): string
    {
        return "Unix file {$this->fileName} is open";
    }

    public function writeFile(string $content): string
    {
        return "Unix file {$this->fileName} is writing of the contents: {$content}";
    }

    public function closeFile(): string
    {
        return "Unix file {$this->fileName} is closed";
    }
}