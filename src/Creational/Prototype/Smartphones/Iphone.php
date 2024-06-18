<?php

namespace App\Creational\Prototype\Smartphones;

use App\Creational\Prototype\Abstract\AbstractSmartphone;
use App\Creational\Prototype\Abstract\InterfaceCloneable;

final class Iphone extends AbstractSmartphone
{
    public function clone(): InterfaceCloneable
    {
        return clone $this;
    }
}