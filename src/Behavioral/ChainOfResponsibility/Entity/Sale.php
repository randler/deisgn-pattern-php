<?php

namespace App\Behavioral\ChainOfResponsibility\Entity;

final class Sale
{
    public readonly float $price;

    public function __construct(float $price)
    {
        $this->price = $price;
    }
}