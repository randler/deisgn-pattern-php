<?php

namespace App\Behavioral\ChainOfResponsibility\Staff;

use App\Behavioral\ChainOfResponsibility\Abstract\ApproveHandler;
use App\Behavioral\ChainOfResponsibility\Entity\Sale;

final class SellerHandler extends ApproveHandler
{
    public function processSale(Sale $sale): string
    {
        if ($sale->price < 3_000) {
            return "Sale approved by seller with price {$sale->price}";
        } 
        return parent::processSale($sale);
    }
}