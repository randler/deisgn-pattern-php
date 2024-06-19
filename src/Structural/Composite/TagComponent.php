<?php

namespace App\Structural\Composite;

abstract class TagComponent
{
    public function add(TagComponent $tagComponent): void
    {
        throw new \BadMethodCallException('Method not implemented');
    }

    public function getChild(TagComponent $tagComponent): TagComponent
    {
        throw new \BadMethodCallException('Method not implemented');
    }
    abstract public function display(): void;
}