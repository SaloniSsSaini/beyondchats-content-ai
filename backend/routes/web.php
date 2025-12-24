<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/api/articles', [ArticleController::class, 'index']);
Route::get('/api/articles/{id}', [ArticleController::class, 'show']);
Route::post('/api/articles', [ArticleController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});
