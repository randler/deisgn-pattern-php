<?php

namespace App\Behavioral\Visitor\Property;

use App\Behavioral\Visitor\Composite\Abstract\HtmlTag;
use App\Behavioral\Visitor\Composite\Elements\HtmlElement;
use App\Behavioral\Visitor\Composite\Elements\HtmlParentElement;
use App\Behavioral\Visitor\Interface\Visitor;

final class ClassPropertyVisitor implements Visitor
{
    private function changeProperty(HtmlTag $tag, string $className): string
    {
        $tagName = str_replace(['<', '>'], '', $tag->getStartTag());
        return "<{$tagName} class=\"{$className}\">";
    }

    public function visitHtmlElement(HtmlElement $element): void
    {
        $element->setStartTag($this->changeProperty($element, 'visitor-child'));
    }
    public function visitHtmlParentElement(HtmlParentElement $parentElement): void
    {
        $parentElement->setStartTag($this->changeProperty($parentElement, 'visitor-parent'));
    }
}