<?php

namespace App\Structural\Proxy\Interface;

use App\Structural\Proxy\Site;

interface Internet
{
    public function connectTo(Site $site): void;
}