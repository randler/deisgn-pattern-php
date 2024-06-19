<?php

use App\Creational\AbstractFactory\Factory\NormalMusicalInstrumentFactory;

describe('NormalMusicalInstrumentFactoryTest', function () {
    it('testCanBuildNormalGuitar', function () {
            $factory = new NormalMusicalInstrumentFactory();
            
            $gianniniGuitar = $factory->buildGuitar("Giannini");
            $tagimaGuitar = $factory->buildGuitar("Tagima");
            $taylorGuitar = $factory->buildGuitar("Taylor");
            
            $this->assertEquals("Giannini Normal Guitar", $gianniniGuitar->getModel());
            $this->assertEquals("Tagima Normal Guitar", $tagimaGuitar->getModel());
            $this->assertEquals("Taylor Normal Guitar", $taylorGuitar->getModel());
    });

    it('testCanBuildNormalPiano', function () {
        $factory = new NormalMusicalInstrumentFactory();
        $bosendorferPiano = $factory->buildPiano("Bosendorfer");
        $fazioliPiano = $factory->buildPiano("Fazioli");
        
        $this->assertEquals("Bosendorfer Normal Piano", $bosendorferPiano->getModel());
        $this->assertEquals("Fazioli Normal Piano", $fazioliPiano->getModel());
    });

});
