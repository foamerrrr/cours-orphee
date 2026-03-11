<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::prefix('articles')->group(function () {
    Route::get('/create', [ArticleController::class, 'creer']);
    Route::get('/update/{id}', [ArticleController::class, 'modifier']);
    Route::get('/delete/{id}', [ArticleController::class, 'supprimer']);
    Route::get('/{id}', [ArticleController::class, 'show']);
});

Route::fallback(function () {
    return view('errors.not-found');
});