<?php

namespace App\Behavioral\ChainOfResponsibility\Interface;

use App\Behavioral\ChainOfResponsibility\Entity\Sale;

interface SaleHandler
{
    public function processSale(Sale $sale): string;
}