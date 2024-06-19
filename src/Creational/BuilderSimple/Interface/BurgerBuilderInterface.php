<?php
namespace App\Creational\BuilderSimple\Interface;
;
use App\Creational\BuilderSimple\Product\BurgerSimple;

interface BurgerBuilderInterface
{
    public function addBread(string $bread): self;
    public function addPatty(string $patty): self;
    public function addVeggies(string $veggies): self;
    public function addSauces(string $sauces): self;
    public function addWithExtraCheese(): self;
    public function build(): BurgerSimple;
}