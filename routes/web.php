<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('api/testimonials', function () {
    return json_encode(
        [
            [
                "name" => "Taylor Otwell",
                "body"=> "If you're not a member of Laracasts, what are you doing?",
                "avatar"=> "https://cdn.hashnode.com/res/hashnode/image/upload/ll9qygmnnhquvtuzjrh2/1457550484.jpg?w=500&h=500&fit=crop&crop=faces&auto=format&q=60",
                "link"=> "https://laravel.ru/posts/158",
            ],
            [
                "name" => "Jeffrey Way",
                "body"=> "I built Laracasts all the way back in 2013, and have been running it ever since. Even to this day, I still love sharing everything I know about programming. I currently live in Orlando, Florida with my wife and kids.",
                "avatar"=> "https://www.gravatar.com/avatar/5800ab190a877b8ff9fb8fd39cd25fbf?s=200&d=https%3A%2F%2Fassets.tutsplus.com%2Fimages%2Fhub%2Favatar_default.png&r=PG",
                "link"=> "https://twitter.com/jeffrey_way",
            ]

        ]
    );
});



