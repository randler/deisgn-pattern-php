<?php

use App\Structural\Flyweight\DB\CatDataBase;
use App\Structural\Flyweight\Entity\Cat;

describe('ClientCat', function () {
    it('should return CatDataBase: Cat added (Tom, Siamese)', function () {
        $catDataBase = new CatDataBase();
        $catVariation = $catDataBase->getVariation('Siamese', 'image1', 'black', 'smooth', 'short', 'small');
        $cat = new Cat('Tom', '3', 'Jerry', $catVariation);
        $catDataBase->addCats('Tom', '3', 'Jerry', 'Siamese', 'image1', 'black', 'smooth', 'short', 'small');
        $cat = $catDataBase->findCat(['name' => 'Tom']);
        $render = $cat->render();
        expect($render)->toBe("Name: Tom\nAge: 3\nOwner: Jerry\nBreed: Siamese\nImage: image1\nColor: black\nTexture: smooth");
    });
});