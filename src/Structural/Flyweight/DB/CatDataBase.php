<?php

namespace App\Structural\Flyweight\DB;

use App\Structural\Flyweight\Entity\Cat;
use App\Structural\Flyweight\Variation\CatVariation;

class CatDataBase
{
    private $cats = [];
    private $variations = [];

    public function addCats(
        string $name, 
        string $age, 
        string $owner, 
        string $breed, 
        string $image, 
        string $color, 
        string $texture, 
        string $fur, 
        string $size
    ): void
    {
        $variation = $this->getVariation($breed, $image, $color, $texture, $fur, $size);
        $this->cats[] = new Cat($name, $age, $owner, $variation);
        echo "CatDataBase: Cat added ($name, $breed) \n";
    }

    public function getVariation(
        string $breed, 
        string $image, 
        string $color, 
        string $texture, 
        string $fur, 
        string $size
    ): CatVariation
    {
        $key = $this->getKey(get_defined_vars());

        if(!isset($this->variations[$key])) {
            $this->variations[$key] = 
                new CatVariation($breed, $image, $color, $texture, $fur, $size);
        }

        return $this->variations[$key];
    }

    public function getKey(array $vars): string
    {
        return md5(implode("_", $vars));
    }

    public function findCat(array $query)
    {
        foreach ($this->cats as $cat) {
            if ($cat->matches($query)) {
                return $cat;
            }
        }
        echo "CatDataBase: Sorry, your query does not yield any results.";
    }
}