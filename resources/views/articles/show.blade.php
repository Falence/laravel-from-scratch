@extends('layout')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
@endsection
@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>{{ $article->title }}</h2>
                </div>
                <p>
                    <img src="/images/banner.jpg" alt="" class="image image-full" />
                </p>

                <p> {{ $article->body }}</p>

                <p>
                    @foreach($article->tags as $tag)
                        <a class="mr-4 btn btn-secondary"
                           href="{{ route('articles.index', ['tag' => $tag->name ]) }}">{{ $tag->name }}</a>
                    @endforeach
                </p>

            </div>
        </div>
    </div>

@endsection
