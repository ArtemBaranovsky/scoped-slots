<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
{{--        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">--}}

    </head>
    <body>
        <div id="app">
            @include ('layouts.nav.index')
            {{--            <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true }'>--}}
{{--                <img src="http://placeimg.com/640/480/any">--}}
{{--                <img src="http://placeimg.com/640/480/any?2">--}}
{{--                <img src="http://placeimg.com/640/480/any?3">--}}
{{--                <img src="http://placeimg.com/640/480/any?4">--}}
{{--                <img src="http://placeimg.com/640/480/any?5">--}}
{{--            </div>--}}

            <carousel>
                <img src="http://placeimg.com/640/480/any">
                <img src="http://placeimg.com/640/480/any?2">
                <img src="http://placeimg.com/640/480/any?3">
                <img src="http://placeimg.com/640/480/any?4">
                <img src="http://placeimg.com/640/480/any?5">
            </carousel>

            <h2>Another one</h2>

            <div style="width: 300px; height: 150px;">
                <carousel autoplay="true">
                    <img style="height: 150px;" src="http://placeimg.com/640/480/any">
                    <img style="height: 150px;" src="http://placeimg.com/640/480/any?2">
                    <img style="height: 150px;" src="http://placeimg.com/640/480/any?3">
                    <img style="height: 150px;" src="http://placeimg.com/640/480/any?4">
                    <img style="height: 150px;" src="http://placeimg.com/640/480/any?5">
                </carousel>
            </div>

        </div>
{{--        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>--}}
        <script src="/js/app.js"></script>
    </body>
</html>
