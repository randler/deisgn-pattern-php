<?php

namespace App\Creational\Builder;

use App\Creational\Builder\Product\Burger;

interface BurgerBuilderInterface
{
    public function addBread(string $bread): self;
    public function addPatty(string $patty): self;
    public function addVeggies(string $veggies): self;
    public function addSauces(string $saouces): self;
    public function addWithExtraCheese(): self;
    public function build(): Burger;
}