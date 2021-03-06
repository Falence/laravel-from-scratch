@extends('layout')

@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <ul class="style1">
                    @forelse($articles as $article)
                        <li class="first">
                            <h3><a href="{{ $article->path() }}">{{ $article->title }}</a></h3>
                            <p>
                                <img src="/images/banner.jpg" alt="" class="image image-full" />
                            </p>
                            <p>{{ $article->excerpt }}</p>
                        </li>
                    @empty
                        <div>No "{{ request('tag') }}" related articles have been posted yet!</div>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>

@endsection

