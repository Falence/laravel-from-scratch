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

    public function index()
    {
        return view('articles.index', [
            'articles' => Article::latest()->get()
        ]);
    }

    public function create()
    {
        return view('articles.create');
    }
}
