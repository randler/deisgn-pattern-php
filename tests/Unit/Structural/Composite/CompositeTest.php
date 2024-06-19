<?php

use App\Structural\Composite\Tag;
use App\Structural\Composite\TagComposite;

describe('Composite Test', function () {
    it('Should create a composite tag', function () {
       $html = new TagComposite('html');
        $head = new TagComposite('head');
        $head->add(new Tag('title', 'Hello World'));
        $html->add($head);
        $body = new TagComposite('body');
        $div = new TagComposite('div');
        
        $body->add($div);
        $body->getChild($div)->add(new Tag('img'));
        $body->getChild($div)->add(new Tag('h1', 'Growth Dev'));
        $html->add($body);
        $html->display();
        $this->expectOutputString(
            "<html>\n"
            . "<head>\n"
            .    "<title>Hello World</title>\n"
            . "</head>\n"
            . "<body>\n"
            .    "<div>\n"
            .      "<img />\n"
            .        "<h1>Growth Dev</h1>\n"
            .    "</div>\n"
            . "</body>\n"
            . "</html>\n"
        );
    });
});