const mix = require('laravel-mix');

mix.sass('resources/sass/app.scss', 'public/css');

mix.react('resources/js/app.js','public/js');
