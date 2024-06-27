<?php

namespace App\Behavioral\Memento;

use App\Behavioral\Memento\Interface\EditorMemento;
use RuntimeException;
use SplDoublyLinkedList;

final class History
{
    public function __construct(
        private SplDoublyLinkedList $states = new SplDoublyLinkedList()
    ) {
    }

    public function save(EditorMemento $memento): void
    {
        $this->states->push($memento);
    }

    public function restore(Editor $editor): void
    {
        if ($this->states->isEmpty()) {
            throw new RuntimeException('No states to restore');
        }
        $this->states->pop();
        $editor->restore($this->states->top());
    }
}