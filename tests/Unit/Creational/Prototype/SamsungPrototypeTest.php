<?php

use App\Creational\Prototype\Smartphones\Iphone;
use App\Creational\Prototype\Smartphones\Samsung;

describe('SamsungPrototypeTest', function () {
    it('testCanCreateSamsungPhoneClone', function () {
        $samsungXPT1 = (new Samsung())
            ->setName('Samsung XPT1')
            ->setPrice(1000);
        $samsungXPT2 = clone $samsungXPT1;
        $samsungXPT2->setName('Samsung XPT2')
        ->setPrice(2000)
            ->setAdditionalFeatures('99 GB');
        $this->assertEquals(
            'Model name: Samsung XPT1, Price: 1000.00, Additional Features: none',
            $samsungXPT1->getModel()
        );
        $this->assertEquals(
            'Model name: Samsung XPT2, Price: 2000.00, Additional Features: 99 GB',
            $samsungXPT2->getModel()
        );
    });

    it('testCanCreateIPhoneClone', function () {
        $iphone13 = (new Iphone())
            ->setName('IPhone 13')
            ->setPrice(1000);
        $iphone13Pro = clone $iphone13;
        $iphone13Pro->setName('IPhone 13 Pro')
            ->setPrice(2000)
            ->setAdditionalFeatures('99 GB');
        $this->assertEquals(
            'Model name: IPhone 13, Price: 1000.00, Additional Features: none',
            $iphone13->getModel()
        );
        $this->assertEquals(
            'Model name: IPhone 13 Pro, Price: 2000.00, Additional Features: 99 GB',
            $iphone13Pro->getModel()
        );
    });
});