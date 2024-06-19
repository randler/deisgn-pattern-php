<?php

namespace App\Creational\Builder\Director;

use App\Creational\Builder\BurgerBuilderInterface;
use App\Creational\Builder\Product\Burger;

final Class BurgerDirector
{
    public function buildBurger(BurgerBuilderInterface $builder): Burger
    {
        return $builder
            ->build();
    }
}