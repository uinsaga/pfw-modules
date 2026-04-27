<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ArticleController::class, 'index']);
Route::post('/create-article', [ArticleController::class, 'store']);
Route::get('/edit-article/{id}', [ArticleController::class, 'edit']);
Route::put('/edit-article/{id}', [ArticleController::class, 'update']);
Route::delete('/delete-article/{id}', [ArticleController::class, 'destroy']);

Route::get('/about', [AboutController::class, 'index']);
Route::get('/calculate-square/{p}/{l}', [AboutController::class, 'calculateSquare']);

Route::get('login', function () {
    return view('auths.login');
});
