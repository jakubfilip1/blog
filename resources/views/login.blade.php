@extends('layout')

@section('content')
    <div class="container bg-dark">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="login" class="form-label">Login</label>
                            <input type="text" class="form-control" id="login" name="login" placeholder="Login">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary mb-3">Zaloguj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
