@extends('layout')

@section('content')
    @foreach($articles as $article)
        <hr>
        <div class="container">
            <div class="row">
                <div class="p-4 container">
                    <h2 class="card-title mb-3">
                        <a href="#" class="link-danger">
                            {{ $article->title }}
                        </a>
                    </h2>
                    <p class="card-text">{{ $article->content  }}</p>
                    <p class="card-text"><small class="text-muted"> DATA</small></p>
                </div>
            </div>
        </div>
    @endforeach
@endsection
