<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function validateInput()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
    ]);
    }

    public function index()
    {
        return view('articles.index', [
            'articles' => Article::latest()->get()
        ]);
    }

    public function show(Article $article)
    {
        //$article = Article::find($id);
        return view('articles.show', ['article' => $article] );
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        /*
        $this->validateInput();

        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();
        */

        Article::create($this->validateInput());

        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        //$article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        //$article = Article::find($id);
        /*
        $this->validateInput();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();
        */

        $article->update($this->validateInput());

        return redirect('/articles');
    }
}
