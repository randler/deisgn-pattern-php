<?php

namespace App\Behavioral\Visitor\Interface;

use App\Behavioral\Visitor\Composite\Elements\HtmlElement;
use App\Behavioral\Visitor\Composite\Elements\HtmlParentElement;

interface Visitor
{
    public function visitHtmlElement(HtmlElement $element): void;
    public function visitHtmlParentElement(HtmlParentElement $element): void;
}