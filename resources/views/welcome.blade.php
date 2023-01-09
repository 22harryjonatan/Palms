<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1"> --}}

        {{-- <meta name="viewport" content="width=device-width, user-scalable=no"> --}}
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
        <title>Palms App</title>
        @vite(['resources/js/app.js'])
    </head>
    <body>
	    <div id="app"></div>

    </body>
</html>
