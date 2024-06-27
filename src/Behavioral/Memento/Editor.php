<?php

namespace App\Behavioral\Memento;

use App\Behavioral\Memento\Interface\EditorMemento;
use App\Behavioral\Memento\State\EditorState;

class Editor
{
    private string $content;

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function save(): EditorMemento
    {
        return new EditorState($this->content);
    }

    public function restore(EditorMemento $memento): void
    {
        $this->content = $memento->getContent();
    }
}