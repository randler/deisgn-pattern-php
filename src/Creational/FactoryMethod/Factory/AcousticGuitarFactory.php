<?php

namespace App\Creational\FactoryMethod\Factory;

use App\Creational\FactoryMethod\Products\AcousticGuitar;
use App\Creational\FactoryMethod\Products\MusicalInstrument;

class AcousticGuitarFactory implements MusicalInstrumentFactory
{
    public function createMusicalInstrument(string $brand): MusicalInstrument
    {
        return new AcousticGuitar($brand);
    }
}