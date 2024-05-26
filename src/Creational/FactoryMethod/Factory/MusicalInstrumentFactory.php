<?php

namespace App\Creational\FactoryMethod\Factory;

use App\Creational\FactoryMethod\Products\MusicalInstrument;

interface MusicalInstrumentFactory
{
    public function createMusicalInstrument(string $brand): MusicalInstrument;
}