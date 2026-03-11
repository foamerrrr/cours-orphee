<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::prefix('articles')->name('articles')->group(function () {
    Route::get('/creer', [ArticleController::class, 'create'])->name('creer');
    Route::get('/modifier/{id}', [ArticleController::class, 'update'])->name('modifier');
    Route::get('/supprier/{id}', [ArticleController::class, 'delete'])->name('supprimer');
    Route::get('/{id}', [ArticleController::class, 'show']);
});

Route::fallback(function () {
    return view('errors.not-found');
});