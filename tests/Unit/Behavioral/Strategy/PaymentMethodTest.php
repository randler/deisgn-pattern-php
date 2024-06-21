<?php

use App\Behavioral\Strategy\Context\PaymentProcessor;
use App\Behavioral\Strategy\Methods\CashPaymentMethod;
use App\Behavioral\Strategy\Methods\CreditCardPaymentMethod;
use App\Behavioral\Strategy\Methods\DebitCardPaymentMethod;

describe('Payment method strategy', function () {
    it('should return the correct amount for cash payment', function () {
        $cashPaymentMethod = new CashPaymentMethod();
        $paymentProcessor = new PaymentProcessor($cashPaymentMethod);
        $paymentProcessor->processPayment(100);
        expect($paymentProcessor->getAmount())->toBe(90.0);
    });

    it('should return the correct amount for debit card payment', function () {
        $debitCardPaymentMethod = new DebitCardPaymentMethod();
        $paymentProcessor = new PaymentProcessor($debitCardPaymentMethod);
        $paymentProcessor->processPayment(100);
        expect($paymentProcessor->getAmount())->toBe(95.0);
    });

    it('should return the correct amount for credit card payment', function () {
        $creditCardPaymentMethod = new CreditCardPaymentMethod();
        $paymentProcessor = new PaymentProcessor($creditCardPaymentMethod);
        $paymentProcessor->processPayment(100);
        expect($paymentProcessor->getAmount())->toBe(100.0);
    });
    
});