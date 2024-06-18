<?php 

namespace App\Creational\Prototype\Abstract;

abstract class AbstractSmartphone implements InterfaceCloneable
{
    private string $name;
    private float $price;
    private string $additionalFeatures = 'none';

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }
    public function setAdditionalFeatures(string $additionalFeatures): self
    {
        $this->additionalFeatures = $additionalFeatures;
        return $this;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function getAdditionalFeatures(): string
    {
        return $this->additionalFeatures;
    }
    public function getModel(): string
    {
        return sprintf(
            'Model name: %s, Price: %.2f, Additional Features: %s',
            $this->name,
            $this->price,
            $this->additionalFeatures
        );
    }
}