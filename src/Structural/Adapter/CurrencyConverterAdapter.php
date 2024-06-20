<?php

namespace App\Structural\Adapter;

use App\Structural\Adapter\CurrencyConverter;

final class CurrencyConverterAdapter 
{
    private CurrencyConverter $currencyConverter;

    public function __construct(CurrencyConverter $currencyConverter)
    {
        $this->currencyConverter = $currencyConverter;
    }

    public function convert(float $amount): float
    {
        return $this->currencyConverter->convert($amount);
    }
}