<?php

namespace App\Structural\Proxy;

final class Site
{
    public readonly string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }
}