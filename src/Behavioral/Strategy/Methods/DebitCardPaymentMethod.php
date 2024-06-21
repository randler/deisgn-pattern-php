<?php

namespace App\Behavioral\Strategy\Methods;

use App\Behavioral\Strategy\Interface\PaymentMethodStrategy;

class DebitCardPaymentMethod implements PaymentMethodStrategy
{
    private const DISCOUNT_PERCENT = 0.05;

    public function pay(float $amount): float
    {
        return $amount - ($amount * self::DISCOUNT_PERCENT);
    }
}