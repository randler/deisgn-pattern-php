<?php 

namespace DesignPatterns\Creational\FactoryMethod\Factory;

use DesignPatterns\Creational\FactoryMethod\Products\ElectricGuitar;
use DesignPatterns\Creational\FactoryMethod\Products\MusicalInstrument;

class ElectricGuitarFactory implements MusicalInstrumentFactory
{
    public function createMusicalInstrument(string $brand): MusicalInstrument
    {
        return new ElectricGuitar($brand);
    }
}