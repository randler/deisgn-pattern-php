<?php

namespace App\Behavioral\Memento\State;

use App\Behavioral\Memento\Interface\EditorMemento;

final class EditorState implements EditorMemento
{
    private string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}