<?php 

namespace App\Structural\Decorator\Elements;

use App\Structural\Decorator\Interface\InputFormat;

class TextFormat implements InputFormat
{
    protected $inputFormat;

    public function __construct(InputFormat $inputFormat)
    {
        $this->inputFormat = $inputFormat;
    }

    public function formatText(string $text): string
    {
        return $this->inputFormat->formatText($text);
    }
}