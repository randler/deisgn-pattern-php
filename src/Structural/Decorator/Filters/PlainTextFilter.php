<?php 

namespace App\Structural\Decorator\Filters;

use App\Structural\Decorator\Elements\TextFormat;

class PlainTextFilter extends TextFormat
{
    public function formatText(string $text): string
    {
        $text = parent::formatText($text);
        return strip_tags($text);
    }
}