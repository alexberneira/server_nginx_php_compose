<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <style>
            
        </style>
    </head>
    <body>
    <main>
        @yield('content')
    </main>
    <footer>footer</footer>
    </body>
</html>
