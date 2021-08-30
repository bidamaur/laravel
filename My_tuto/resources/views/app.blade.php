<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title',env('app_name'))</title>

    </head>
    <body >

 @yield('content')
 
 <footer>&copy; DEVMY Root</footer>
    </body>
</html>
