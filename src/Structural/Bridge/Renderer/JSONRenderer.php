<?php
namespace App\Structural\Bridge\Renderer;

use App\Structural\Bridge\Interface\Renderer;

class JSONRenderer implements Renderer
{
    public function renderTitle(string $title): string
    {
        return json_encode(['title' => $title]);
    }

    public function renderTextBlock(string $text): string
    {
        return json_encode(['text' => $text]);
    }

    public function renderImage(string $url): string
    {
        return json_encode(['image' => $url]);
    }

    public function renderLink(string $url, string $title): string
    {
        return json_encode(['link' => ['url' => $url, 'title' => $title]]);
    }

    public function renderHeader(): string
    {
        return json_encode(['header' => 'header']);
    }

    public function renderFooter(): string
    {
        return json_encode(['footer' => 'footer']);
    }

    public function renderParts(array $parts): string
    {
        return json_encode($parts);
    }
}