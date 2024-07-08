<?php

namespace App\Behavioral\Visitor\Property;

use App\Behavioral\Visitor\Composite\Abstract\HtmlTag;
use App\Behavioral\Visitor\Composite\Elements\HtmlElement;
use App\Behavioral\Visitor\Composite\Elements\HtmlParentElement;
use App\Behavioral\Visitor\Interface\Visitor;

final class StylePropertyVisitor implements Visitor
{
    private function changeProperty(HtmlTag $tag, int $width): string
    {
        $tagName = str_replace(['<', '>'], '', $tag->getStartTag());
        return "<{$tagName} style=\"width:{$width}px;\">";
    }

    public function visitHtmlElement(HtmlElement $element): void
    {
        $element->setStartTag($this->changeProperty($element, 580));
    }
    public function visitHtmlParentElement(HtmlParentElement $parentElement): void
    {
        $parentElement->setStartTag($this->changeProperty($parentElement, 758));
    }
}