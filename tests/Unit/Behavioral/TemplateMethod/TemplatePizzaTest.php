<?php

use App\Behavioral\TemplateMethod\Pizzas\CommonPizza;
use App\Behavioral\TemplateMethod\Pizzas\VeganPizza;

describe('TemplatePizzaTest', function () {
    it('testCommonPizza', function () {
        $pizza = new CommonPizza();
        $this->expectOutputString("Preparing common dough\nAdding common ingredients\nBaking common pizza\nAssembling common pizza\n");
        $pizza->make();
    });

    it('testVeganPizza', function () {
        $pizza = new VeganPizza();
        $this->expectOutputString("Preparing vegan dough\nAdding vegan ingredients\nBaking vegan pizza\nAssembling vegan pizza\n");
        $pizza->make();
    });

});