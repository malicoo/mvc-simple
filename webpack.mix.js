let mix = require('laravel-mix');

require('mix-tailwindcss');

mix
    .js('assets/js/app.js', 'public/js')
    .sass('assets/sass/app.scss', 'public/css')
    .setPublicPath('public')
    .tailwind();