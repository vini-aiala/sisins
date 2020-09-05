<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="icon" href="../img/globo.png">
        <meta charset="utf-8">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/materialize.css">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        @yield('css')
    </head>

    <body>
        <main>
            @yield('main')
        </main>
    </body>
</html>
