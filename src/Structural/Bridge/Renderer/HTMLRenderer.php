<?php

namespace App\Structural\Bridge\Renderer;

use App\Structural\Bridge\Interface\Renderer;

class HTMLRenderer implements Renderer
{
    public function renderTitle(string $title): string
    {
        return "<h1>{$title}</h1>";
    }

    public function renderTextBlock(string $text): string
    {
        return "<div class='text-block'>{$text}</div>";
    }

    public function renderImage(string $url): string
    {
        return "<img src='{$url}' />";
    }

    public function renderLink(string $url, string $title): string
    {
        return "<a href='{$url}'>{$title}</a>";
    }

    public function renderHeader(): string
    {
        return "<header>";
    }

    public function renderFooter(): string
    {
        return "</footer>";
    }

    public function renderParts(array $parts): string
    {
        return implode("\n", $parts);
    }
}