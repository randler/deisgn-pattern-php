<?php

use App\Creational\Builder\BurgerBuilder;
use App\Creational\Builder\Director\BurgerDirector;

describe('BurgerBuilder', function () {
    
    it('testCanCreateBurger', function () {
        $burgerBuilder = (new BurgerBuilder())
            ->addBread("Brown Bread")
            ->addPatty("Beef")
            ->addVeggies("Pickles")
            ->addSauces("All")
            ->addWithExtraCheese();

        $burgerDirector = new BurgerDirector();
        $burger = $burgerDirector->buildBurger($burgerBuilder);

        expect($burger->getBread())->toBe("Brown Bread");
        expect($burger->getPatty())->toBe("Beef");
        expect($burger->getVeggies())->toBe("Pickles");
        expect($burger->getSauces())->toBe("All");
        expect($burger->getWithExtraCheese())->toBeTrue();

    });

    it('testCanCreatePartialBurger', function () {
        $burgerBuilder = (new BurgerBuilder())
            ->addBread("Brown Bread")
            ->addPatty("Beef")
            ->addSauces("All");
        $burgerDirector = new BurgerDirector();
        $burger = $burgerDirector->buildBurger($burgerBuilder);
        
        expect($burger->getBread())->toBe("Brown Bread");
        expect($burger->getPatty())->toBe("Beef");
        expect($burger->getSauces())->toBe("All");
    });

});