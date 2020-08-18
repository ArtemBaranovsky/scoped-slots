<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">

    <title>Laravel</title>

</head>
<body>
<div id="app">
    @include ('layouts.nav.index')
    <testimonials></testimonials>
</div>
<script src="/js/app.js"></script>
</body>
</html>
