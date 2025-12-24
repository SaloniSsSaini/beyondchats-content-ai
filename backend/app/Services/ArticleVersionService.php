<?php

namespace App\Services;

use App\Models\Article;

class ArticleVersionService
{
    public function createUpdatedVersion(
        Article $original,
        string $content,
        array $references = []
    ): Article {
        return Article::create([
            'title' => $original->title,
            'content' => $content . "\n\nReferences:\n" . implode("\n", $references),
            'version' => 'updated',
            'parent_article_id' => $original->id,
        ]);
    }
}
