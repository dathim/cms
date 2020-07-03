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

mix.js('resources/js/bootstrap.js', 'public/js');
mix.js('node_modules/jquery/dist/jquery.js', 'public/js');
mix.js('resources/js/ui/vueui.js', 'public/js');
mix.js('resources/js/ui/vuelidate.js', 'public/js'); 

mix.sass('resources/sass/app.scss', 'public/css');
mix.sass('resources/sass/ui/style.scss', 'public/css');
mix.sass('resources/sass/cms.scss', 'public/css');
mix.styles('vendor/twbs/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.css');  