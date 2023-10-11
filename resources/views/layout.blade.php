<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <style></style>

        @vite(['resources/js/app.js', 'resources/css/app.css'])

    </head>
    <body class="vh-100">
        <div class="container-fluid bg-danger min-vh-100">
            <div class="container p-3">
                <div class="row mb-3">
                    @include('header')
                </div>
                <div class="row mb-3 text-light">
                    @yield('content')
                </div>
                <div class="row">
                    @include('footer')
                </div>
            </div>
        </div>
    </body>
</html>
