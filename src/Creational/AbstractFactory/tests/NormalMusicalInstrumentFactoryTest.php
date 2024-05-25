<?php

namespace App\Creational\AbstractFactory\Tests;

use App\Creational\AbstractFactory\Factory\NormalMusicalInstrumentFactory;
use PHPUnit\Framework\TestCase;

final class NormalMusicalInstrumentFactoryTest extends TestCase
{
    public function testCanBuildNormalGuitar(): void
    {
        $factory = new NormalMusicalInstrumentFactory();
        
        $gianniniGuitar = $factory->buildGuitar("Giannini");
        $tagimaGuitar = $factory->buildGuitar("Tagima");
        $taylorGuitar = $factory->buildGuitar("Taylor");
        
        $this->assertEquals("Giannini Normal Guitar", $gianniniGuitar->getModel());
        $this->assertEquals("Tagima Normal Guitar", $tagimaGuitar->getModel());
        $this->assertEquals("Taylor Normal Guitar", $taylorGuitar->getModel());
    }
    public function testCanBuildNormalPiano(): void
    {
        $factory = new NormalMusicalInstrumentFactory();
        $bosendorferPiano = $factory->buildPiano("Bosendorfer");
        $fazioliPiano = $factory->buildPiano("Fazioli");
        
        $this->assertEquals("Bosendorfer Normal Piano", $bosendorferPiano->getModel());
        $this->assertEquals("Fazioli Normal Piano", $fazioliPiano->getModel());
    }
}
