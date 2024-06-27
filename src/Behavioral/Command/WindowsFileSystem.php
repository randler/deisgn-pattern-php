<?php

namespace App\Behavioral\Command;

use App\Behavioral\Command\Interfaces\FileSystem;

final class WindowsFileSystem implements FileSystem
{
    private string $fileName = 'file.bat';

    public function openFile(): string
    {
        return "Windows file {$this->fileName} is open";
    }

    public function writeFile(string $content): string
    {
        return "Windows file {$this->fileName} is writing of the contents: {$content}";
    }
    public function closeFile(): string
    {
        return "Windows file {$this->fileName} is closed";
    }
}