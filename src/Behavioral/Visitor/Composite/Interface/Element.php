<?php

namespace App\Behavioral\Visitor\Composite\Interface;

use App\Behavioral\Visitor\Interface\Visitor;

interface Element
{
    public function accept(Visitor $visitor);
}