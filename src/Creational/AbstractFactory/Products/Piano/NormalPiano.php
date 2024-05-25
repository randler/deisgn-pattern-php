<?php

namespace App\Creational\AbstractFactory\Products\Piano;

class NormalPiano extends Piano
{
    public function getModel(): string
    {
        return sprintf('%s Normal Piano', parent::getBrand());
    }
}
