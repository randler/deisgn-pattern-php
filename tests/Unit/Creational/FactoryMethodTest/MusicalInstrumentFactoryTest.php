<?php

use App\Creational\FactoryMethod\MusicalInstrumentFactory;
use App\Creational\FactoryMethod\Products\AcousticGuitar;
use App\Creational\FactoryMethod\Products\ElectricGuitar;

describe('MusicalInstrumentFactoryTest', function () {

    it('testCanCreateAcousticGuitar', function () {
        $factory = new MusicalInstrumentFactory();
        $acousticGuitar = $factory->createMusicalInstrument(
            MusicalInstrumentFactory::ACOUSTIC_GUITAR,
            'Giannini Model'
        );
        $acousticGuitar->make();
        $this->assertInstanceOf(AcousticGuitar::class, $acousticGuitar);
    });

    it('testCanCreateElectricGuitar', function () {
        $factory = new MusicalInstrumentFactory();
        $eletricGuitar = $factory->createMusicalInstrument(
            MusicalInstrumentFactory::ELECTRIC_GUITAR,
            'Tagima Model'
        );
        $eletricGuitar->make();
        $this->assertInstanceOf(ElectricGuitar::class, $eletricGuitar);
    });

    it('testShouldThrowExceptionWhenUnknownInstrument', function () {
        $this->expectException(\InvalidArgumentException::class);
        $factory = new MusicalInstrumentFactory();
        $factory->createMusicalInstrument('Unknown', 'Giannini Model');
    });
});