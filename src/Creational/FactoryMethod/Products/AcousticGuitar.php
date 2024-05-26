<?php

namespace App\Creational\FactoryMethod\Products;

class AcousticGuitar extends MusicalInstrument
{
    public function make(): void
    {
        printf("Made a %s acoustic guitar \n\n", $this->getBrand());
    }
}