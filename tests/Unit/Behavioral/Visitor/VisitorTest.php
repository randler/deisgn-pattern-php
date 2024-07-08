<?php

use App\Behavioral\Visitor\Composite\Elements\HtmlElement;
use App\Behavioral\Visitor\Composite\Elements\HtmlParentElement;
use App\Behavioral\Visitor\Property\ClassPropertyVisitor;
use App\Behavioral\Visitor\Property\StylePropertyVisitor;

describe('Visitor tag test', function () {
    it('should change the class of the element', function () {
        $class = new ClassPropertyVisitor();
        $style = new StylePropertyVisitor();

        $html = new HtmlParentElement();
        $html->setStartTag("<html>");

        $body = new HtmlParentElement();
        $body->setStartTag("<body>");
        $body->accept($style);
        $body->accept($class);

        $html->addChildTag($body);

        $p = new HtmlElement("Testing html tag library");
        $p->setStartTag("<p>");
        $p->accept($style);
        $p->accept($class);
        $p->setEndTag("</p>");

        $html->getChild($body)->addChildTag($p);
        $html->getChild($body)->setEndTag("</body>");
        $html->setEndTag("</html>");
        $render = $html->generateHtml();

        expect($render)
            ->toBe("<html>\n<body style=\"width:758px;\" class=\"visitor-parent\">\n<p style=\"width:580px;\" class=\"visitor-child\"> Testing html tag library </p>\n</body>\n</html>\n"
        );

    });

});