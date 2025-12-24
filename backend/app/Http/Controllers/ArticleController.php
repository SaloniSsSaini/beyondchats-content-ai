<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return response()->json([
            'data' => Article::latest()->get()
        ]);
    }

    public function show($id)
    {
        return response()->json([
            'data' => Article::findOrFail($id)
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'version' => 'nullable|string',
            'parent_article_id' => 'nullable|integer'
        ]);

        $article = Article::create($data);

        return response()->json(['data' => $article], 201);
    }
}
