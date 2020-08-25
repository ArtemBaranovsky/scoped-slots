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

Route::get('/render', function () {
    return view('render');
});

Route::get('/faq', function () {
    return view('faq', [
//        'questions' => [
//            ['question' => '1-st question', 'answer' => '1-st answer'],
//            ['question' => '2-nd question', 'answer' => '2-nd answer']
//        ]
        'questions' =>
//            trim(
//                json_encode([
//                    'questions' => [
                    [
                            ['question' => '1-st question', 'answer' => '1-st answer'],
                            ['question' => '2-nd question', 'answer' => '2-nd answer'],
                            ['question' => '3-rd question', 'answer' => '3-rd answer'],
                            ['question' => '4-th question', 'answer' => '4-th answer'],
                            ['question' => '5-th question', 'answer' => '5-th answer'],
                            ['question' => '6-th question', 'answer' => '6-th answer'],
                            ['question' => '7-th question', 'answer' => '7-th answer'],
                            ['question' => '8-th question', 'answer' => '8-th answer'],
                            ['question' => '9-th question', 'answer' => '9-th answer'],
                            ['question' => '10-th question', 'answer' => '10-th answer'],
                            ['question' => '11-th question', 'answer' => '11-th answer'],
                    ]
//                    ]
//            ], /*true*/ JSON_UNESCAPED_SLASHES | JSON_FORCE_OBJECT | JSON_PARTIAL_OUTPUT_ON_ERROR)
//            , '{"}"')."\"}"
//            , '"')

    ]);
});

Route::get('/discuss/channels/general-discussion/laravel-53-wish-list', function () {
//    return view('discuss/reply', [
//        'reply' =>  {
//            id : 1,
//            name : 1
//    }]);
    return view('discuss/reply', [
        'reply' => [
            'id' => 1,
            'user_id' => 1,
            'likes' => ['username' => 'Jeffrey'],
            'user' => ['username' => 'Jeffrey']
        ]
    ]);
});

Route::post('/contact', function () {
    return [ 'message' => 'success'];
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('api/series', function () {
    return json_encode(
        [
            'PHP' => [
                ['title' => 'PHP Bits'],
                ['title' => 'The PHP Practitioner'],
                ['title' => 'Whatcha Working On'],
                ['title' => 'Design Patterns in PHP'],
                ['title' => 'Simple Rules for Simpler Code'],
                ['title' => 'What\'s New in PHP 7.1'],
                ['title' => 'How Do I'],
                ['title' => 'Whip Monstrous Code Into Shape'],
                ['title' => 'PHP 7 Up and Running'],
                ['title' => 'Object-Oriented Bootcamp'],
                ['title' => 'How to Accept Payments'],
                ['title' => 'Discover Symfony Components'],
                ['title' => 'SOLID Principles in PHP'],
                ['title' => 'How to Build Command-Line Apps'],
                ['title' => 'Incremental APIs'],
            ],
            'Laravel' => [
                ['title' => 'What\'s New in Laravel 5.5'],
                ['title' => 'What\'s New in Laravel 5.4'],
                ['title' => 'Laravel Authentication Techniques'],
                ['title' => 'Laravel 5.2 From Scratch'],
                ['title' => 'Eloquent Techniques'],
                ['title' => 'Advanced Eloquent'],
                ['title' => 'Let\'s Build A Forum with Laravel and TDD'],
                ['title' => 'What\'s New in Laravel 5.3'],
                ['title' => 'Charting and You'],
                ['title' => 'What\'s New in Laravel 5.2'],
                ['title' => 'What\'s New in Laravel 5.1'],
                ['title' => 'Build Your First App'],
                ['title' => 'Laravel 5.4 From Scratch'],
                ['title' => 'Hands On: Community Contributions'],
                ['title' => 'Russian-Doll Caching in Laravel'],
                ['title' => 'Real-time Laravel with Socket.io'],
                ['title' => 'Intermediate Laravel'],
                ['title' => 'Laravel 4 From Scratch']
            ],
            'Testing' => [
                ['title' => 'Testing Laravel'],
                ['title' => 'Code Katas in PHP'],
                ['title' => 'Intuitive Integration Testing'],
                ['title' => 'The Lifecycle of a New Feature'],
                ['title' => 'Testing Jargon']
            ],
            'JavaScript' => [
                ['title' => 'Webpack for Everyone'],
                ['title' => 'HTML5 Video and VideoJS'],
                ['title' => 'Modern CSS Workflow'],
                ['title' => 'Learn Vue 2: Step By Step'],
                ['title' => 'ES2015 Crash Course'],
                ['title' => 'Painless Builds With Elixir'],
                ['title' => 'Learn Flexbox Through Examples'],
                ['title' => 'Learning Vue 1.0: Step By Step'],
                ['title' => 'Do You React?']
            ],
            'Tooling' => [
                ['title' => 'CSS Grids for Everyone'],
                ['title' => 'Learn Redis Through Examples'],
                ['title' => 'Sublime Text Mastery'],
                ['title' => 'Understand Regular Expressions'],
                ['title' => 'Professional PHP Workflow in Sublime Text 3'],
                ['title' => 'Laravel Spark'],
                ['title' => 'Git Me Some Version Control'],
                ['title' => 'Be Awesome in PHPStorm'],
                ['title' => 'Setup a Mac Dev Machine From Scratch'],
                ['title' => 'Vim Mastery'],
                ['title' => 'Envoyer']
            ]
        ]
    );
});

Route::get('api/testimonials', function () {
    return json_encode(
        [
            [
                "name" => "Taylor Otwell",
                "body"=> "If you're not a member of Laracasts, what are you doing?",
                "avatar"=> "https://laracasts.com/images/reviews/taylor-otwell.jpg",
                "link"=> "https://laravel.ru/posts/158",
            ],
            [
                "name" => "Ian Landsman",
                "body"=> "Really, Laracasts is totally off the hook. Jeffrey Way is an amazing teacher.",
                "avatar"=> "https://laracasts.com/images/reviews/ian-landsman.jpg",
                "link"=> "http://besnappy.com/",
            ],
            [
                "name" => "Dries Vints",
                "body"=> "Probably the most \"must-watch\" web development screencasts on the internet.",
                "avatar"=> "https://laracasts.com/images/reviews/dries-vints.jpg",
                "link"=> "http://driesvints.com/",
            ],
            [
                "name" => "Eric Barnes",
                "body"=> "Laracasts is the premier learning tool for Laravel. The tutorials are always concise and relevant. If you use Laravel, subscribing is a must!",
                "avatar"=> "https://laracasts.com/images/reviews/eric-barnes.jpg",
                "link"=> "http://ericlbarnes.com/",
            ],
            [
                "name" => "Chris Fidao",
                "body"=> "Even when developing something I \"know,\" I review Laracasts on the topic. There's always something new Jeff talks about, even if it's just a different point of view.",
                "avatar"=> "https://laracasts.com/images/reviews/chris-fidao.jpg",
                "link"=> "https://laracasts.com/images/reviews/chris-fidao.jpg",
            ],
//            [
//                "name" => "Jeffrey Way",
//                "body"=> "I built Laracasts all the way back in 2013, and have been running it ever since. Even to this day, I still love sharing everything I know about programming. I currently live in Orlando, Florida with my wife and kids.",
//                "avatar"=> "https://www.gravatar.com/avatar/5800ab190a877b8ff9fb8fd39cd25fbf?s=200&d=https%3A%2F%2Fassets.tutsplus.com%2Fimages%2Fhub%2Favatar_default.png&r=PG",
//                "link"=> "https://twitter.com/jeffrey_way",
//            ]
        ]
    );
});



