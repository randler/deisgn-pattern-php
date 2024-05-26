<?php

namespace DesignPatterns\Creational\FactoryMethod\Factory;

use DesignPatterns\Creational\FactoryMethod\Products\MusicalInstrument;

interface MusicalInstrumentFactory
{
    public function createMusicalInstrument(string $brand): MusicalInstrument;
}