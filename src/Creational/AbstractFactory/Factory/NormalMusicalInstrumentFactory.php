<?php

namespace App\Creational\AbstractFactory\Factory;

use App\Creational\AbstractFactory\Factory\MusicalInstrumentFactory;
use App\Creational\AbstractFactory\Products\Guitar\Guitar;
use App\Creational\AbstractFactory\Products\Guitar\NormalGuitar;
use App\Creational\AbstractFactory\Products\Piano\NormalPiano;
use App\Creational\AbstractFactory\Products\Piano\Piano;

class NormalMusicalInstrumentFactory extends MusicalInstrumentFactory
{
    public function buildGuitar(string $brand): Guitar
    {
        return new NormalGuitar($brand);
    }

    public function buildPiano(string $brand): Piano
    {
        return new NormalPiano($brand);
    }
}