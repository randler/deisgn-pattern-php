<?php

namespace App\Creational\FactoryMethod;

use App\Creational\FactoryMethod\Products\AcousticGuitar;
use App\Creational\FactoryMethod\Products\ElectricGuitar;
use App\Creational\FactoryMethod\Products\MusicalInstrument;

class MusicalInstrumentFactory
{
    public const ACOUSTIC_GUITAR = 'acoustic_guitar';
    public const ELECTRIC_GUITAR = 'electric_guitar';

    public function createMusicalInstrument(string $type, string $brand): MusicalInstrument
    {
        switch ($type) {
            case self::ACOUSTIC_GUITAR:
                return new AcousticGuitar($brand);
            case self::ELECTRIC_GUITAR:
                return new ElectricGuitar($brand);
            default:
                throw new \InvalidArgumentException('Invalid musical instrument tpe');
        }
    }
}