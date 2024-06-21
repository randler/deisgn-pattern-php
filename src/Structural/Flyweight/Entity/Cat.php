<?php

namespace App\Structural\Flyweight\Entity;

use App\Structural\Flyweight\Variation\CatVariation;

class Cat
{
    public function __construct(
        public $name, 
        public $age, 
        public $owner, 
        public CatVariation $variation
    ) {}

    public function matches(array $query): bool
    {
        foreach ($query as $key => $value) {
            if (property_exists($this, $key)) {
                if($this->$key !== $value) return false;
            } else if (property_exists($this->variation, $key)) {
                if($this->variation->$key !== $value) return false;
            } else {
                return false;
            }
        }
        return true;
    }

    public function render(): string
    {
        return $this->variation->renderProfile($this->name, $this->age, $this->owner);
    }
}