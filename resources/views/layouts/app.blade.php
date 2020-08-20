<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel</title>

</head>
<body>
    <div id="app">
        @include ('layouts.nav.index')
{{--        @include ('series.banner-meta')--}}
        <series-banner></series-banner>
        <main class="container mx-auto py-4">
            @yield('content')
        </main>
    </div>
<script src="/js/app.js"></script>
</body>
</html>
