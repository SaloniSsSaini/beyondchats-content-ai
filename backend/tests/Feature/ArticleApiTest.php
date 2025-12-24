<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Article;

class ArticleApiTest extends TestCase
{
    public function test_articles_list()
    {
        Article::factory()->count(2)->create();
        $response = $this->getJson('/api/articles');
        $response->assertStatus(200);
    }
}
