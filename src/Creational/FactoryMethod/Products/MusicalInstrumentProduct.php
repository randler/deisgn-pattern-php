<?php

namespace DesignPatterns\Creational\FactoryMethod\Products;


interface MusicalInstrumentProduct
{
    public function make(): void;
}