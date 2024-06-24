<?php

namespace App\Behavioral\TemplateMethod\Maker;

abstract class PizzaMaker
{
    abstract protected function prepareDough(): void;
    abstract protected function addIngredients(): void;
    abstract protected function bake(): void;
    abstract protected function assemble(): void;
    
    public function make(): void
    {
        $this->prepareDough();
        $this->addIngredients();
        $this->bake();
        $this->assemble();
    }

}