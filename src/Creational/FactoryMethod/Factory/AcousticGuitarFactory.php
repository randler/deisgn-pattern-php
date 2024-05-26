<?php

namespace DesignPatterns\Creational\FactoryMethod\Factory;

use DesignPatterns\Creational\FactoryMethod\Products\AcousticGuitar;
use DesignPatterns\Creational\FactoryMethod\Products\MusicalInstrument;

class AcousticGuitarFactory implements MusicalInstrumentFactory
{
    public function createMusicalInstrument(string $brand): MusicalInstrument
    {
        return new AcousticGuitar($brand);
    }
}