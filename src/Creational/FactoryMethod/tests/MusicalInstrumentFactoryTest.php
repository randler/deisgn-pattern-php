<?php

namespace App\Creational\FactoryMethod\Tests;

use App\Creational\FactoryMethod\MusicalInstrumentFactory;
use App\Creational\FactoryMethod\Products\AcousticGuitar;
use App\Creational\FactoryMethod\Products\ElectricGuitar;
use PHPUnit\Framework\TestCase;

final class MusicalInstrumentFactoryTest extends TestCase
{
    public function testCanCreateAcousticGuitar(): void
    {
        $factory = new MusicalInstrumentFactory();
        $acousticGuitar = $factory->createMusicalInstrument(
            MusicalInstrumentFactory::ACOUSTIC_GUITAR,
            'Giannini Model'
        );
        $acousticGuitar->make();
        $this->assertInstanceOf(AcousticGuitar::class, $acousticGuitar);
    }
    public function testCanCreateElectricGuitar(): void
    {
        $factory = new MusicalInstrumentFactory();
        $eletricGuitar = $factory->createMusicalInstrument(
            MusicalInstrumentFactory::ELECTRIC_GUITAR,
            'Tagima Model'
        );
        $eletricGuitar->make();
        $this->assertInstanceOf(ElectricGuitar::class, $eletricGuitar);
    }
    public function testShouldThrowExceptionWhenUnknownInstrument(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $factory = new MusicalInstrumentFactory();
        $factory->createMusicalInstrument('Unknown', 'Giannini Model');
    }
}