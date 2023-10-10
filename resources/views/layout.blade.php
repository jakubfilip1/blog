<!DOCTYPE html>
    <head>
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
