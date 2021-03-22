<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article] );
    }

    public function all()
    {
        return view('articles.all', [
            'articles' => Article::all()
        ]);
    }
}