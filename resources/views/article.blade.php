@extends('layout')

@section('content')
        <div class="container mb-3 bg-dark">
            <div class="row">
                <div class="p-4 container">
                    <h2 class="card-title mb-3">
                        <a href="#" class="link-danger">
                            {{ $article->title }}
                        </a>
                    </h2>
                    <p class="card-text">{!! $article->content  !!}</p>
                    <p class="card-text"><small class="text-muted"> DATA</small></p>
                </div>
            </div>
        </div>

        @if(!empty($comments))
        <div class="container bg-dark mb-3">
                @foreach($comments as $comment)
                    <div class="row">
                        <div class="p-4 container">
                            <h5 class="card-title mb-3">
                                <span class="text-danger">
                                    {{ $comment->name }}
                                </span>
                            </h5>
                            <p class="card-text">{{ $comment->message  }}</p>
                        </div>
                    </div>
                @endforeach
        </div>
        @endif

        <div class="container bg-dark">
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <form action="{{ route('comments') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Imię</label>
                                <input required type="text" class="form-control" id="name" name="name" placeholder="Imię">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input required type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Wiadomość</label>
                                <textarea required class="form-control" id="message" name="message" placeholder="Wiadomość"></textarea>
                            </div>
                            <input type="hidden" id="articleId" name="articleId" value="{{ $article->id }}">
                            <button type="submit" class="btn btn-primary mb-3">Wyślij</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
