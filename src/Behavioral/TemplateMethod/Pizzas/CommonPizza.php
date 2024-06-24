<?php

namespace App\Behavioral\TemplateMethod\Pizzas;

use App\Behavioral\TemplateMethod\Maker\PizzaMaker;

class CommonPizza extends PizzaMaker
{
    protected function prepareDough(): void
    {
        echo "Preparing common dough\n";
    }

    protected function addIngredients(): void
    {
        echo "Adding common ingredients\n";
    }

    protected function bake(): void
    {
        echo "Baking common pizza\n";
    }

    protected function assemble(): void
    {
        echo "Assembling common pizza\n";
    }
}