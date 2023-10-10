@extends('layout')

@section('content')
    <div class="container bg-dark">
    @foreach($articles as $article)
            <hr>
            <div class="row">
                <div class="p-4 container">
                    <h2 class="card-title mb-3">
                        <a href="{{ route('article', ['id' => $article->id])  }}" class="link-danger">
                            {{ $article->title }}
                        </a>
                    </h2>
                    <p class="card-text">{{ $article->content  }}</p>
                    <p class="card-text"><small class="text-muted"> DATA</small></p>
                </div>
            </div>
    @endforeach
        <hr>
    </div>
@endsection
