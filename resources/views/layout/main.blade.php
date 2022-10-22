<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
        <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#1E1F43">
        <meta name="msapplication-TileColor" content="#1E1F43">
        <meta name="theme-color" content="#1E1F43">

        @vite([
            'resources/css/app.css',
            'resources/sass/main.sass'
        ])

    </head>
    <body class="antialiased" x-data="{ 'showTaskUploadModal': false, 'showTaskEditModal': false }" x-cloak>

        @include('layout.header')

        @include('layout.footer')

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
        @vite([
            'resources/js/app.js'
        ])

    </body>
</html>
