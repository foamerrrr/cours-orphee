<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function show($id)
    {   
        $article = Article::findOrFail($id);
        if (isset($article)) {
            return view('pages.article-details', compact('article'));
        }
    }

    public function create()
    {
        Article::create([
                'title' => 'L’IA soigne mieux',
                'description' => 'L’intelligence artificielle aide les médecins à diagnostiquer plus vite.'
            ],
            [
                'title' => 'Villes vertes',
                'description' => 'Les métropoles deviennent plus écologiques et durables.'
            ],
            [
                'title' => 'Télétravail',
                'description' => 'Plus de liberté, mais aussi plus de solitude.'
            ]);

        return "articles creer";
    }

    public function update($id)
    {
        $article = Article::findOrFail($id);
        if (isset($article)) {    
            $article->update([
                'title' => 'Titre modifié',
                'description' => 'Description modifiée'
            ]);   
        }
    }

    public function delete($id)
    {   
        $article = Article::findOrFail($id);

        if (isset($article)) {    
            Article::destroy($id);   
        }
    }
}