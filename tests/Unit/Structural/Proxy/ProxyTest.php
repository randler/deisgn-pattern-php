<?php

use App\Structural\Proxy\ProxyInternet;
use App\Structural\Proxy\Site;

describe('Proxy', function () {
    it('testProxy', function () {
        $proxyInternet = new ProxyInternet();
        $site = new Site('google.com');
        $proxyInternet->connectTo($site);
        
        expect($site->url)->toBe('google.com');
    });

    it('testProxyBannedSite', function () {
        $proxyInternet = new ProxyInternet();
        $site = new Site('facebook.com');
        expect(fn() => $proxyInternet->connectTo($site))
            ->toThrow(new Exception('Access Denied'));
    });
});