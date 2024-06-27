<?php

namespace App\Behavioral\Command\Interfaces;

interface FileSystem
{
    public function openFile(): string;
    public function writeFile(string $content): string;
    public function closeFile(): string;
}