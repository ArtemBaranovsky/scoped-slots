@extends('layouts.app')
{{--@section('meta-title', 'Laracasts Frequently Asked Questions')--}}
{{--@section('meta-description', 'Laracasts frequently asked questions.')--}}

@section('styles')
    <style>
        /*html, body { height: 100vh; }*/
        /*body {*/
        /*    display: flex; align-items: center; justify-content: center;*/
        /*}*/
        /*.tooltip {*/
        /*    background: black; color: white; padding: 10px; border-radius: 15px; opacity: unset;*/
        /*}*/
    </style>
@stop


@section('content')
    <scan-view></scan-view>

{{--    <section class="is-small is-normal">--}}
{{--        <h3>Option #1</h3>--}}
{{--        <p>--}}
{{--            Hello there, <span data-tooltip="I am a tooltip" data-tooltip-placement="right">hover over me</span>--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            Hello there again, <span data-tooltip="So we meet again" data-tooltip-placement="bottom">hover over me again</span>--}}
{{--        </p>--}}

{{--        <hr>--}}
{{--        <h3>Option #2</h3>--}}
{{--        <p>--}}
{{--            Hello there, <span v-tooltip:top="'Here is another way to make a tooltip'">hover over me</span>--}}
{{--        </p>--}}

{{--        <hr>--}}
{{--        <h3>Option #3</h3>--}}
{{--        <p>--}}
{{--            Hello there, <span data-tooltip-name="our-products-tooltip">Learn about our products</span>--}}
{{--        </p>--}}
{{--        <tooltip name="our-products-tooltip" placement="left" offset="0, 20">--}}
{{--            <div class="p-4 w-64">--}}
{{--                <h1 class="mb-4">Our products</h1>--}}
{{--                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto aut commodi cumque enim et eum--}}
{{--                    expedita facilis, fugiat maiores minima nam neque officiis omnis porro quibusdam quis tempore, vel--}}
{{--                    vero.</p>--}}
{{--            </div>--}}
{{--        </tooltip>--}}


{{--    </section>--}}
@stop
