<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\BlogScraperService;

class ScrapeBeyondChatsBlogs extends Command
{
    protected $signature = 'scrape:beyondchats';
    protected $description = 'Scrape BeyondChats oldest blog articles';

    public function handle(BlogScraperService $service): int
    {
        $service->scrapeOldestBlogs();
        $this->info('BeyondChats blogs scraped successfully.');
        return 0;
    }
}
