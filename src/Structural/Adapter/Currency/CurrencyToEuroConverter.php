<?php

namespace App\Structural\Adapter\Currency;

use App\Structural\Adapter\CurrencyConverter;

final class CurrencyToEuroConverter implements CurrencyConverter
{
    const CURRENCY_NAME = 'EUR';
    const CURRENCY_VALUE = 6.35;
    public function convert(float $amount): float
    {
        return $amount * self::CURRENCY_VALUE;
    }
}