@extends('layout')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
@endsection
@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <h1>Edit article</h1>
            <form method="POST" action="{{ route('articles.update', $article) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input name="title"
                           value="{{ $article->title }}"
                           placeholder="Title of your article"
                           type="text"
                           class="form-control"
                           id="title"
                           aria-describedby="titleHelp">
                    <div id="titleHelp" class="form-text">A title that best describes your article.</div>
                </div>

                <div class="mb-3">
                    <label for="excerpt" class="form-label">Excerpts:</label>
                    <textarea
                        name="excerpt"
                        class="form-control"
                        id="excerpt"
                        rows="1"
                        placeholder="Excerpts of your article...">{{ $article->excerpt }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label">Body:</label>
                    <textarea name="body"
                              class="form-control"
                              id="body"
                              rows="10"
                              placeholder="Body of your article...">{{ $article->body }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>

@endsection
