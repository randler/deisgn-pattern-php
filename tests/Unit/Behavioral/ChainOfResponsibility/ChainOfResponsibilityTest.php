<?php

use App\Behavioral\ChainOfResponsibility\Entity\Sale;
use App\Behavioral\ChainOfResponsibility\Staff\DirectorHandler;
use App\Behavioral\ChainOfResponsibility\Staff\ManagerHandler;
use App\Behavioral\ChainOfResponsibility\Staff\SellerHandler;

describe('ChainOfResponsibility teste Sale', function() {
    it('testSale Seller', function() {
        $seller = new SellerHandler;
        $seller->setNext(new ManagerHandler)
            ->setNext(new DirectorHandler);

        $sale = new Sale(2_999.99);
        
        expect($seller->processSale($sale))
            ->toBe('Sale approved by seller with price 2999.99');
    });

    it('testSale Manager', function() {
        $seller = new SellerHandler;
        $seller->setNext(new ManagerHandler)
            ->setNext(new DirectorHandler);

        $sale = new Sale(3_999.99);

        expect($seller->processSale($sale))
            ->toBe('Sale approved by manager with price 3999.99');

    });

    it('testSale Director', function() {
        $seller = new SellerHandler;
        $seller->setNext(new ManagerHandler)
            ->setNext(new DirectorHandler);

        $sale = new Sale(30_000.01);

        expect($seller->processSale($sale))
            ->toBe('Sale approved by director with price 30000.01');
    });
});