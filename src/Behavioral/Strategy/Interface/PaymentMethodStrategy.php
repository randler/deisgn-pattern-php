<?php 

namespace App\Behavioral\Strategy\Interface;

interface PaymentMethodStrategy
{
    public function pay(float $amount): float;
}