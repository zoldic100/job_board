<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title ?? 'Jobify'}}</title>
        <link rel="icon" href="{{ asset('icon/j.jpg') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="mx-auto mt-10 max-w-lg text-slate-700 
    bg-gradient-to-r from-indigo-200 via-pink-200 to-purple-200">

            {{$slot}}

        
    </body>
</html>
