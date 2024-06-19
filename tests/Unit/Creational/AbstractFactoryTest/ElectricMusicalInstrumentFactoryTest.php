<?php

use App\Creational\AbstractFactory\Factory\ElectricMusicalInstrumentFactory;

describe('ElectricMusicalInstrumentFactoryTest', function () {
    it('testCanBuildElectricGuitar', function () {
        $factory = new ElectricMusicalInstrumentFactory();
        
        $fenderGuitar = $factory->buildGuitar('Fender');
        $tagimaGuitar = $factory->buildGuitar('Tagima');
        $gianniniGuitar = $factory->buildGuitar('Giannini');
    
        $this->assertSame('Fender Electric Guitar', $fenderGuitar->getModel());
        $this->assertSame('Tagima Electric Guitar', $tagimaGuitar->getModel());
        $this->assertSame('Giannini Electric Guitar', $gianniniGuitar->getModel());
    });

    it('testCanBuildElectricPiano', function () {
        $factory = new ElectricMusicalInstrumentFactory();
        $yamahaPiano = $factory->buildPiano("Yamaha");
        $korgPiano = $factory->buildPiano("Korg");

        $this->assertEquals("Yamaha Electric Piano", $yamahaPiano->getModel());
        $this->assertEquals("Korg Electric Piano", $korgPiano->getModel());
    });

});