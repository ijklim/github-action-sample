<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} v{{ config('app.version') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body { font-family:'Nunito'; display:grid; height:100vh; align-items:center; }

            h1 { text-align:center; font-size:5rem; }
            h1 div { font-size:1rem; font-weight:normal; }
        </style>
    </head>
    <body>
        <h1>
            {{ config('app.name') }} v{{ config('app.version') }}
            <div>Laravel v{{ Illuminate\Foundation\Application::VERSION }} | PHP v{{ PHP_VERSION }}</div>
        </h1>
    </body>
</html>
