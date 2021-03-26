<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function validateInput()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'
    ]);
    }

    public function index()
    {
        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;

        }
        else {
            $articles = Article::latest()->get();
        }
        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        //$article = Article::find($id);
        return view('articles.show', ['article' => $article] );
    }

    public function create()
    {
        $tags = Tag::all();
        return view('articles.create', compact('tags'));
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
        $this->validateInput();
        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id = 1;
        $article->save();

        $article->tags()->attach(request('tags'));

        return redirect()->route('articles.index');
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

        return redirect( $article->path() );
    }
}
