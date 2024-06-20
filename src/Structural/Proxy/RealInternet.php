<?php

namespace App\Structural\Proxy;

use App\Structural\Proxy\Interface\Internet;

class RealInternet implements Internet
{
    public function connectTo(Site $site): void
    {
        printf("Connected to %s", $site->url);
    }
}