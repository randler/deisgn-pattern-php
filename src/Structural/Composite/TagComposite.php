<?php

namespace App\Structural\Composite;

use SplObjectStorage;

class TagComposite extends TagComponent
{
    private SplObjectStorage $components;

    public function __construct(private string $name)
    {
        $this->components = new SplObjectStorage();
    }

    public function add(TagComponent $tagComponent): void
    {
        $this->components->attach($tagComponent);
    }

    public function getChild(TagComponent $tagComponent): TagComponent
    {
        if(!$this->components->contains($tagComponent)) {
            throw new \InvalidArgumentException('TagComponent not found');
        }
        return $tagComponent;
    }

    public function display(): void
    {
        echo "<{$this->name}>\n";
        foreach ($this->components as $component) {
            $component->display();
        }
        echo "</{$this->name}>\n";
    }
}