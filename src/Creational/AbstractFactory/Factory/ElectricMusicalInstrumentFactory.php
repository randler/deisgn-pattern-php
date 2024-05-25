<?php

namespace App\Creational\AbstractFactory\Factory;

use App\Creational\AbstractFactory\Factory\MusicalInstrumentFactory;
use App\Creational\AbstractFactory\Products\Guitar\ElectricGuitar;
use App\Creational\AbstractFactory\Products\Guitar\Guitar;
use App\Creational\AbstractFactory\Products\Piano\ElectricPiano;
use App\Creational\AbstractFactory\Products\Piano\Piano;

class ElectricMusicalInstrumentFactory extends MusicalInstrumentFactory
{
    public function buildGuitar(string $brand): Guitar
    {
        return new ElectricGuitar($brand);
    }

    public function buildPiano(string $brand): Piano
    {
        return new ElectricPiano($brand);
    }
}