<?php

namespace DesignPatterns\Creational\FactoryMethod\Products;

class ElectricGuitar extends MusicalInstrument
{
    public function make(): void
    {
        printf("Made a %s eletric guitar \n\n", $this->getBrand());
    }
}