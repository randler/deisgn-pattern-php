<?php 

namespace App\Creational\FactoryMethod\Factory;

use App\Creational\FactoryMethod\Products\ElectricGuitar;
use App\Creational\FactoryMethod\Products\MusicalInstrument;

class ElectricGuitarFactory implements MusicalInstrumentFactory
{
    public function createMusicalInstrument(string $brand): MusicalInstrument
    {
        return new ElectricGuitar($brand);
    }
}