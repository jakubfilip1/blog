<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TEST</title>

        @vite(['resources/js/app.js', 'resources/css/app.css'])

    </head>
    <body>
        <div class="container">
            @include('header')
            @yield('content')
        </div>
    </body>
</html>
