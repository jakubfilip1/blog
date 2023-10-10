@extends('layout')

@section('content')
    @foreach($articles as $article)
        <div>
            <h2>{{ $article->title }}</h2>
            <div>
                {{ $article->content }}
            </div>
        </div>
    @endforeach
@endsection
