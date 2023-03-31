<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>VickenConcept</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- <script src="{{ mix('js/app.js') }}"></script> -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> -->
        <script src="https://kit.fontawesome.com/e7876e48e2.js" crossorigin="anonymous"></script>
        <!-- @vite('resources/css/app.css') -->
    </head>
    <body class="antialiased bg-gray-50">
<div class="w-full">

      @yield('content')
      </div>

    </div>
    </body>
</html>
