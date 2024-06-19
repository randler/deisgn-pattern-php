<?php

namespace App\Creational\BuilderSimple\Interface;

interface BurgerInterface
{
    public function getBread(): string;
    public function getPatty(): string;
    public function getVeggies(): string;
    public function getSauces(): string;
    public function getWithExtraCheese(): bool;
}