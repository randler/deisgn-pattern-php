<?php

namespace App\Creational\AbstractFactory\Products\Guitar;

class NormalGuitar extends Guitar
{
    public function getModel(): string
    {
        return sprintf('%s Normal Guitar', parent::getBrand());
        //return sprintf('%s Normal Guitar', self::getBrand());
    }
}
