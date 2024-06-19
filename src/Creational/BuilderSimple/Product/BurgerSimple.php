<?php

namespace App\Creational\BuilderSimple\Product;

use App\Creational\BuilderSimple\Interface\BurgerBuilderInterface;
use App\Creational\BuilderSimple\Interface\BurgerInterface;
use App\Creational\BuilderSimple\Traits\BurgerTrait;

class BurgerSimple implements BurgerInterface
{
    use BurgerTrait;

    public static function builder(): BurgerBuilderInterface
    {
        return new class implements BurgerBuilderInterface, BurgerInterface {
            use BurgerTrait;

            public function addBread(string $bread): BurgerBuilderInterface
            {
                $this->bread = $bread;
                return $this;
            }

            public function addPatty(string $patty): self
            {
                $this->patty = $patty;
                return $this;
            }
            public function addVeggies(string $veggies): self
            {
                $this->veggies = $veggies;
                return $this;
            }
            public function addSauces(string $sauces): self
            {
                $this->sauces = $sauces;
                return $this;
            }
            public function addWithExtraCheese(): self
            {
                $this->withExtraCheese = true;
                return $this;
            }
            public function build(): BurgerSimple
            {
                return new BurgerSimple($this);
            }
        };
    }

    public function __construct(BurgerInterface $builder)
    {
        $this->bread = $builder->getBread();
        $this->patty = $builder->getPatty();
        $this->veggies = $builder->getVeggies();
        $this->sauces = $builder->getSauces();
        $this->withExtraCheese = $builder->getWithExtraCheese();
    }
}