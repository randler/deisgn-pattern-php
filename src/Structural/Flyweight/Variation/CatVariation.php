<?php 

namespace App\Structural\Flyweight\Variation;

class CatVariation
{
    public function __construct(
        public $breed, 
        public $image, 
        public $color, 
        public $texture, 
        public $fur, 
        public $size
    ) {}

    public function renderProfile(string $name, string $age, string $owner): string
    {
        return "Name: $name\nAge: $age\nOwner: $owner\nBreed: $this->breed\nImage: $this->image\nColor: $this->color\nTexture: $this->texture";
    }



}