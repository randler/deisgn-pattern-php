<?php

namespace App\Structural\Composite;

class Tag extends TagComponent
{
    public function __construct(private string $name, private ?string $content = null)
    {}

    public function display(): void
    {
        if ($this->content) {
            echo "<{$this->name}>{$this->content}</{$this->name}>\n";
        } else {
            echo "<{$this->name} />\n";
        }
    }
}