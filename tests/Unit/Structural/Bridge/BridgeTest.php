<?php

use App\Structural\Bridge\Product\Product;
use App\Structural\Bridge\Product\ProductPage;
use App\Structural\Bridge\Renderer\HTMLRenderer;
use App\Structural\Bridge\Renderer\JSONRenderer;
use App\Structural\Bridge\SimplePage;

describe('BridgeTest', function () {
    it('should render a page with a renderer', function () {
        $HTMLRenderer = new HTMLRenderer();
        $page = new SimplePage($HTMLRenderer, 'Home', 'Welcome to our website!');
        expect($page->view())->toBe("<header>\n<h1>Home</h1>\n<div class='text-block'>Welcome to our website!</div>\n</footer>");
    });

    it('should render a page with a JSON renderer', function () {
        $JSONRenderer = new JSONRenderer();
        $page = new SimplePage($JSONRenderer, 'Home', 'Welcome to our website!');
        expect($page->view())->toBe('["{\"header\":\"header\"}","{\"title\":\"Home\"}","{\"text\":\"Welcome to our website!\"}","{\"footer\":\"footer\"}"]');
    });

    it('should render a product page with a HTML renderer', function () {
        $HTMLRenderer = new HTMLRenderer();
        $product = new Product('1000', 'Product 1', 'Description', 'image.jpg', 1);
        $page = new ProductPage($HTMLRenderer, $product);
        expect($page->view())->toBe("<header>\n<h1>Product 1</h1>\n<div class='text-block'>Description</div>\n<img src='image.jpg' />\n<a href='/cart/add/1000'>Add to Cart</a>\n</footer>");
    });
});