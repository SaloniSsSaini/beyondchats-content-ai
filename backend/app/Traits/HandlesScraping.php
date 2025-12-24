<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;

trait HandlesScraping
{
    protected function fetchHtml(string $url): string
    {
        return Http::timeout(15)->get($url)->body();
    }

    protected function extractText(string $html): string
    {
        return strip_tags($html);
    }
}
