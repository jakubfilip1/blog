@extends('layout')

@section('content')
    @if(!empty($articles))
    <div class="container bg-dark">
    @foreach($articles as $article)
            <div class="row">
                <div class="p-4 container">
                    @if(session('admin_login'))
                    <div class="float-end">
                        <form action="{{ route('articleDelete', ['id' => $article->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger">Usuń</button>
                        </form>
                    </div>
                    @endif
                    <h2 class="card-title mb-3">
                        <a href="{{ route('article', ['id' => $article->id])  }}" class="link-danger ms-auto d-block">
                            {{ $article->title }}
                        </a>
                    </h2>
                    <p class="card-text">{!! $article->content  !!}</p>
                </div>
            </div>
    @endforeach
    </div>
    @endif
@endsection
