<?php

namespace App\Behavioral\Visitor\Composite\Elements;

use App\Behavioral\Visitor\Composite\Abstract\HtmlTag;
use App\Behavioral\Visitor\Interface\Visitor;

class HtmlElement extends HtmlTag
{
    private ?string $content;
    public function __construct(?string $content = '')
    {
        $this->content = $content;
    }
    public function generateHtml(): string
    {
        if ($this->content) {
            return "{$this->startTag} {$this->content} {$this->endTag}\n";
        } else {
            return "{$this->startTag}\n";
        }
    }
    public function accept(Visitor $visitor): void
    {
        $visitor->visitHtmlElement($this);
    }
}