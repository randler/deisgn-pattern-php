<?php

namespace App\Behavioral\Strategy\Methods;

use App\Behavioral\Strategy\Interface\PaymentMethodStrategy;

class CreditCardPaymentMethod implements PaymentMethodStrategy
{
    private const DISCOUNT_PERCENT = 0.00;

    public function pay(float $amount): float
    {
        return $amount - ($amount * self::DISCOUNT_PERCENT);
    }
}