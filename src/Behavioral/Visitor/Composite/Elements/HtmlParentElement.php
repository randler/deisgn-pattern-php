<?php

namespace App\Behavioral\Visitor\Composite\Elements;

use App\Behavioral\Visitor\Composite\Abstract\HtmlTag;
use App\Behavioral\Visitor\Interface\Visitor;
use SplObjectStorage;

class HtmlParentElement extends HtmlTag
{
    private SplObjectStorage $childrenTag;
    public function __construct()
    {
        $this->childrenTag = new SplObjectStorage();
    }
    public function addChildTag(HtmlTag $htmlTag): void
    {
        $this->childrenTag->attach($htmlTag);
    }
    public function removeChildTag(HtmlTag $htmlTag): void
    {
        $this->childrenTag->detach($htmlTag);
    }
    public function getChild(HtmlTag $htmlTag): HtmlTag
    {
        if (!$this->childrenTag->contains($htmlTag)) {
            throw new \InvalidArgumentException('HtmlTag not found');
        }
        return $htmlTag;
    }
    public function generateHtml(): string
    {
        $html = "{$this->startTag}\n";
        foreach ($this->childrenTag as $tag) {
            $html .= $tag->generateHtml();
        }
        $html .= "{$this->endTag}\n";
        return $html;
    }
    public function accept(Visitor $visitor): void
    {
        $visitor->visitHtmlParentElement($this);
    }
}