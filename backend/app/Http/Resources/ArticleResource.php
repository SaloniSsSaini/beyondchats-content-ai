<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'version' => $this->version,
            'source_url' => $this->source_url,
            'parent_article_id' => $this->parent_article_id,
            'created_at' => $this->created_at,
        ];
    }
}
