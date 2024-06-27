<?php

namespace App\Behavioral\ChainOfResponsibility\Staff;

use App\Behavioral\ChainOfResponsibility\Abstract\ApproveHandler;
use App\Behavioral\ChainOfResponsibility\Entity\Sale;

final class DirectorHandler extends ApproveHandler
{
    public function processSale(Sale $sale): string
    {
        if ($sale->price >= 30_000) {
            return "Sale approved by director with price {$sale->price}";
        } 
        return parent::processSale($sale);
    }
}