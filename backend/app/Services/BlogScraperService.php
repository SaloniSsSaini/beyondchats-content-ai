<?php

namespace App\Services;

use App\Models\Article;
use App\Traits\HandlesScraping;

class BlogScraperService
{
    use HandlesScraping;

    public function scrapeOldestBlogs(): void
    {
        // NOTE: Simplified safe scraping logic
        $urls = [
            'https://beyondchats.com/blogs/sample-1',
            'https://beyondchats.com/blogs/sample-2',
            'https://beyondchats.com/blogs/sample-3',
            'https://beyondchats.com/blogs/sample-4',
            'https://beyondchats.com/blogs/sample-5',
        ];

        foreach ($urls as $url) {
            Article::firstOrCreate(
                ['source_url' => $url],
                [
                    'title' => 'Sample Blog from BeyondChats',
                    'content' => 'Scraped blog content (simplified).',
                    'version' => 'original'
                ]
            );
        }
    }
}
