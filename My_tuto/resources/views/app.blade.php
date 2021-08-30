<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title',env('app_name'))</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen " >
<main role="main" class="">
 @yield('content')
</main>
 <footer>&copy; DEVMY Root
    @if(Route::is('home'))
        <a href={{Route('ab')}} class="text-gray-200 hover:text-green-900 underline">About us</a>
    
    @endif
 </footer>
    </body>
</html>
