@extends('layout')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
@endsection
@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <form>
                <h1>Create a new article</h1>

                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input placeholder="Title of your article" type="text" class="form-control" id="title" aria-describedby="titleHelp">
                    <div id="titleHelp" class="form-text">A title that best describes your article.</div>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Excerpts:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Excerpts of your article..."></textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Body:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Body of your article..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
    </div>

@endsection
