<?php

namespace App\Creational\AbstractFactory\Products\Guitar;

abstract class Guitar
{
    private string $brand;
    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }
    public function getBrand(): string
    {
        return $this->brand;
    }

    abstract public function getModel(): string;
}
