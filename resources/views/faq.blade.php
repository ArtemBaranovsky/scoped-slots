@extends('layouts.app')
@section('meta-title', 'Laracasts Frequently Asked Questions')
@section('meta-description', 'Laracasts frequently asked questions.')

@section('content')
    <section class="is-small is-normal">
        <div class="container">
            <div class="w-3/5 m-auto generic-content">
                <header class="mb-10 text-center">
                <h1 class="text-3xl mb-l">FAQ</h1>
                <p>
                    It's okay. From time to time, we all have questions.
                </p>
                </header>
{{--                {{ die(var_dump($questions)) }}--}}
{{--            @foreach ($questions as $question)--}}
{{--                                    {{ die(var_dump(json_encode($questions))) }}--}}
                    <accordion :items="{{ json_encode($questions, JSON_UNESCAPED_SLASHES ) }}"></accordion>
{{--                        <accordion title="{{ $question['question'] }}" body="{{ $question['answer'] }}"></accordion>--}}
{{--                    <accordion title="{{ $question->question }}" body="{{ $question->answer }}"></accordion>--}}
{{--                    <question :question="{{ json_encode($question) }}"></question>--}}
{{--                @endforeach--}}
            </div>
        </div>
    </section>
@stop
