<?php

namespace App\Structural\Adapter\Currency;

use App\Structural\Adapter\CurrencyConverter;

final class CurrencyToDollarConverter implements CurrencyConverter
{
    const CURRENCY_NAME = 'USD';
    const CURRENCY_VALUE = 5.61;
    public function convert(float $amount): float
    {
        return $amount * self::CURRENCY_VALUE;
    }
}