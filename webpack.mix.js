require('laravel-mix-tailwind');
const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');


mix.js(['resources/js/app.js', 'resources/js/views/series-view.js'], 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    })
    .tailwind('./tailwind.config.js');

