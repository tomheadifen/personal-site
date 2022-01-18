<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        {{-- Fonts --}}
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        {{-- Styles --}}
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />

        {{-- Scripts --}}
        @routes
        <script src="{{ mix('/js/app.js') }}" defer></script>
    </head>
    <body>
        @inertia
    </body>

</html>
