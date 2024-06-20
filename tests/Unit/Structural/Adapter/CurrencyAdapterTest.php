<?php

use App\Structural\Adapter\Currency\CurrencyToDollarConverter;
use App\Structural\Adapter\Currency\CurrencyToEuroConverter;
use App\Structural\Adapter\CurrencyConverterAdapter;

describe('CurrencyAdapterTest', function () {
    
    it('testCanConvertCurrencyToDollar', function () {
        $currencyConverter = new CurrencyToDollarConverter();
        $currencyAdapter = new CurrencyConverterAdapter($currencyConverter);
        $valueConverted = $currencyAdapter->convert(1.0);

        expect($valueConverted)->toBe(5.61);
    });

    it('testCanConvertCurrencyToEuro', function () {
        $currencyConverter = new CurrencyToEuroConverter();
        $currencyAdapter = new CurrencyConverterAdapter($currencyConverter);
        $valueConverted = $currencyAdapter->convert(1.0);

        expect($valueConverted)->toBe(6.35);

    });
});