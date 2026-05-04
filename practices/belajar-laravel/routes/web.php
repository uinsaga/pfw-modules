<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("welcome");
});

//routing for articles
// Route::get('/articles', [ArticleController::class, 'index']);
// Route::post('/articles/create', [ArticleController::class, 'store']);
// Route::get('/articles/edit/{id}', [ArticleController::class, 'edit']);
// Route::put('/articles/{id}', [ArticleController::class, 'update']);
// Route::delete('/articles/{id}', [ArticleController::class, 'destroy']);

Route::prefix("/articles")
    ->group(function () {
        Route::get('/', [ArticleController::class, 'index']);
        Route::get('/create', [ArticleController::class, 'create']);
        Route::get('/{id}', [ArticleController::class, 'show']);
        Route::post('', [ArticleController::class, 'store']);
        Route::get('/edit/{id}', [ArticleController::class, 'edit']);
        Route::put('/{id}', [ArticleController::class, 'update']);
        Route::delete('/{id}', [ArticleController::class, 'destroy']);
    });

Route::get('/about', [AboutController::class, 'index']);
Route::get('/calculate-square/{p}/{l}', [AboutController::class, 'calculateSquare']);

Route::get('login', function () {
    return view('auths.login');
});
