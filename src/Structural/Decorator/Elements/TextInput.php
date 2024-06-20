<?php

namespace App\Structural\Decorator\Elements;

use App\Structural\Decorator\Interface\InputFormat;

class TextInput implements InputFormat
{
    public function formatText(string $text): string
    {
        return $text;
    }
}