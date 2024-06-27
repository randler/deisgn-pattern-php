<?php

use App\Behavioral\Memento\Editor;
use App\Behavioral\Memento\History;

describe('Memento', function () {
    it('testMemento', function () {
        $editor = new Editor();
        $history = new History();

        $editor->setContent('I');
        $history->save($editor->save());
        
        $editor->setContent('I am');
        $history->save($editor->save());
        
        $editor->setContent('I am Randler');
        $history->save($editor->save());

        expect($editor->getContent())
            ->toBe('I am Randler');

        $history->restore($editor);
        expect($editor->getContent())
            ->toBe('I am');

        $history->restore($editor);
        expect($editor->getContent())
            ->toBe('I');
    });
});