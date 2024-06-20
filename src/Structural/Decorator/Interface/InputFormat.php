<?php

namespace App\Structural\Decorator\Interface;

interface InputFormat
{
    public function formatText(string $text): string;
}