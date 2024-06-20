<?php

namespace App\Structural\Proxy;

use App\Structural\Proxy\Interface\Internet;

final class ProxyInternet
{
    private Internet $internet;
    private array $bannedSites = array(
        'facebook.com', 
        'twitter.com', 
        'instagram.com'
    );

    public function __construct()
    {
        $this->internet = new RealInternet();
    }

    public function connectTo(Site $site): void
    {
        if (in_array($site->url, $this->bannedSites)) {
            throw new \Exception("Access Denied");
        } 
        $this->internet->connectTo($site);
    }
}