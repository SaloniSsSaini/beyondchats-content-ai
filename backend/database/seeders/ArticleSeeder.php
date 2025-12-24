<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::create([
            'title' => 'Seeded Article',
            'content' => 'This is a seeded article.',
            'version' => 'original'
        ]);
    }
}
