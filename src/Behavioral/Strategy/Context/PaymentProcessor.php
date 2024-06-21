<?php

namespace App\Behavioral\Strategy\Context;

use App\Behavioral\Strategy\Interface\PaymentMethodStrategy;

final class PaymentProcessor
{
    private PaymentMethodStrategy $paymentMethodStrategy;
    private float $amount;

    public function __construct(PaymentMethodStrategy $paymentMethodStrategy)
    {
        $this->paymentMethodStrategy = $paymentMethodStrategy;
    }

    public function processPayment(float $amount): void
    {
        $this->amount = $this->paymentMethodStrategy->pay($amount);
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}