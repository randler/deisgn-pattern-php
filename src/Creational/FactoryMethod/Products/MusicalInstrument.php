<?php

namespace App\Creational\FactoryMethod\Products;


abstract class MusicalInstrument implements MusicalInstrumentProduct
{
    protected $brand;

    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }
}