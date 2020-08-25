@extends('layouts.app')
@section('content')
    <div class="example" style="padding-top: 2000px">
        <div class="flex justify-center">
            <div class="bg-grey rounded-lg p-4 mx-4">
{{--                <count>11</count>--}}
{{--                <count :to="{{ $stats->lesson }}"></count>--}}
                <count :to="11"></count>
            </div>
            <div class="bg-grey rounded-lg p-4 mx-4">
{{--                <count>5</count>--}}
                <count :to="5"></count>
            </div>
            <div class="bg-grey rounded-lg p-4 mx-4">
{{--                <count>1955</count>--}}
                <count :to="1955"></count>
            </div>
        </div>
    </div>
@endsection
