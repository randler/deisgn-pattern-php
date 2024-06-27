<?php

namespace App\Behavioral\ChainOfResponsibility\Abstract;

use App\Behavioral\ChainOfResponsibility\Entity\Sale;
use App\Behavioral\ChainOfResponsibility\Interface\SaleHandler;

abstract class ApproveHandler implements SaleHandler
{
    private ?ApproveHandler $nextHandler = null;

    public function setNext(ApproveHandler $nextHandler): ApproveHandler
    {
        $this->nextHandler = $nextHandler;
        return $nextHandler;
    }

    public function processSale(Sale $sale): string
    {
        if ($this->nextHandler) {
            return $this->nextHandler->processSale($sale);
        }
        return "Sale not approved";
    }
}