<?php

namespace App\Creational\AbstractFactory\Factory;

use App\Creational\AbstractFactory\Products\Guitar\Guitar;
use App\Creational\AbstractFactory\Products\Piano\Piano;

abstract class MusicalInstrumentFactory
{
    abstract public function buildGuitar(string $brand): Guitar;
    abstract public function buildPiano(string $brand): Piano;
}