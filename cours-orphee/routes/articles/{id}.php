<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/articles/{id}', [ArticleController::class, 'show']);