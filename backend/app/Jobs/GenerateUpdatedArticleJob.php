<?php

namespace App\Jobs;

use App\Models\Article;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class GenerateUpdatedArticleJob implements ShouldQueue
{
    use Dispatchable, Queueable;

    public function __construct(public Article $article) {}

    public function handle(): void
    {
        // Placeholder: Node worker will handle AI processing
        logger('AI update job dispatched for article ID ' . $this->article->id);
    }
}
