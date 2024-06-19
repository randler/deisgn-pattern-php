<?php

namespace App\Creational\Builder\Product;

class Burger
{
    private string $bread;
    private string $patty;
    private string $veggies;
    private string $sauces;
    private bool $withExtraCheese = false;

    public function setBread(string $bread): void
    {
        $this->bread = $bread;
    }
    public function setPatty(string $patty): void
    {
        $this->patty = $patty;
    }
    public function setVeggies(string $veggies): void
    {
        $this->veggies = $veggies;
    }
    public function setSauces(string $sauces): void
    {
        $this->sauces = $sauces;
    }
    public function setWithExtraCheese(bool $withExtraCheese): void
    {
        $this->withExtraCheese = $withExtraCheese;
    }
    
    public function getBread(): string
    {
        return $this->bread;
    }
    public function getPatty(): string
    {
        return $this->patty;
    }
    public function getveggies(): string
    {
        return $this->veggies;
    }
    public function getSauces(): string
    {
        return $this->sauces;
    }
    public function getWithExtraCheese(): bool
    {
        return $this->withExtraCheese;
    }
}