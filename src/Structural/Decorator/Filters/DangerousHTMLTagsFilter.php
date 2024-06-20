<?php

namespace App\Structural\Decorator\Filters;

use App\Structural\Decorator\Elements\TextFormat;

class DangerousHTMLTagsFilter extends TextFormat
{
    private $dangerousTagPatterns = [
        "|<script.*?>([\s\S]*)?</script>|i",
        "|<style.*?>([\s\S]*)?</style>|i"
    ];

    private $dangerousAttributes = [
        "onclick", "onkeypress", "onload",
        "onmouseover", "onerror", "onfocus",
        "onblur", "onchange", "onsubmit",
        "onreset", "onselect", "onunload",
        "ondblclick", "onmousedown", "onmouseup",
        "onmousemove", "onmouseout", "onkeypress",
        "onkeydown", "onkeyup", "onabort",
    ];

    public function formatText(string $text): string
    {
        $text = parent::formatText($text);

        foreach ($this->dangerousTagPatterns as $pattern) {
            $text = preg_replace($pattern, '', $text);
        }

        foreach ($this->dangerousAttributes as $attribute) {
            $text = preg_replace_callback('|<(.*?)>|', function ($matches) use ($attribute) {
                $result = preg_replace("|$attribute=|i", '', $matches[1]);
                return "<" . $result . ">";
            }, $text);
        }
        return $text;
    }
}