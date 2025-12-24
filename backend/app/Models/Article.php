<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'source_url',
        'version',
        'parent_article_id'
    ];

    public function parent()
    {
        return $this->belongsTo(Article::class, 'parent_article_id');
    }

    public function versions()
    {
        return $this->hasMany(Article::class, 'parent_article_id');
    }
}
