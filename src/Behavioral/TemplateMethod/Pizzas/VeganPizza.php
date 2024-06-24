<?php 

namespace App\Behavioral\TemplateMethod\Pizzas;

use App\Behavioral\TemplateMethod\Maker\PizzaMaker;

class VeganPizza extends PizzaMaker
{

    protected function prepareDough(): void
    {
        echo "Preparing vegan dough\n";
    }

    protected function addIngredients(): void
    {
        echo "Adding vegan ingredients\n";
    }

    protected function bake(): void
    {
        echo "Baking vegan pizza\n";
    }

    protected function assemble(): void
    {
        echo "Assembling vegan pizza\n";
    }

}