const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

//mix.js('resources/js/app.js', 'public/js')
//		.sass('resources/sass/app.scss', 'public/css');
//mix.stylus('', 'public/css');

mix.js('vendor/twbs/bootstrap/dist/js/bootstrap.min.js', 'public/js');
mix.sass('resources/sass/app.scss', 'public/css');
mix.styles('vendor/twbs/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.css');  