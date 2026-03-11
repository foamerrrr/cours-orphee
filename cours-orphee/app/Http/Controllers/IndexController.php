<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class IndexController extends Controller
{
public function index()
    {
        $articles = Article::all();
        $name = "Laurent";

        return view('welcome', compact('articles', 'name'));
    }
}