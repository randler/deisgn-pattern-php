<?php 

namespace App\Structural\Adapter;

interface CurrencyConverter
{
    public function convert(float $amount): float;
}