<?php

namespace App\Creational\AbstractFactory\Products\Guitar;

class ElectricGuitar extends Guitar
{
    public function getModel(): string
    {
        return sprintf('%s Electric Guitar', parent::getBrand());
    }
}
