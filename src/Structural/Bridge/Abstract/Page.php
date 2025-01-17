<?php

namespace App\Structural\Bridge\Abstract;

use App\Structural\Bridge\Interface\Renderer;

abstract class Page
{
    protected $renderer;

    public function __construct(Renderer $renderer)
    {
        $this->renderer = $renderer;
    }

    public function changeRenderer(Renderer $renderer)
    {
        $this->renderer = $renderer;
    }

    abstract public function view(): string;
}