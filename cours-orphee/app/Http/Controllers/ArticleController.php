<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);

        return view('pages.article-details', compact('article'));
    }

    public function creer()
    {
        Article::create([
            'title' => "Titre",
            'description' => "Description",
            'date' => now()
        ]);

        return "articles creer";
    }

    public function modifier($id)
    {
        $article = Article::find($id);

        $article->update([
            'title' => 'Titre modifié',
            'description' => 'Description modifiée'
        ]);
    }

    public function supprimer($id)
    {
        Article::destroy($id);
    }

    public function index()
    {
        $articles = Article::all();
    }
}