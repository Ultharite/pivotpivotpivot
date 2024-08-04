<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Example App</title>

        
        <link rel="stylesheet" href="/css/app.min.css" />

       
    </head>
    <body>
        <x-nav></x-nav>
       <main>
       {{ $slot }}</main>
    </body>
</html>
