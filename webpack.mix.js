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

mix.styles([
    'public/assets/css/bootstrap.min.css',
    'public/assets/css/style.css',
    'public/assets/css/owl.carousel.min.css',
    'public/assets/css/owl.theme.default.min.css',
    'public/assets/css/font-awesome.min.css',
    'public/assets/css/themify-icons.css',
    'public/assets/css/ionicons.min.css',
    'public/assets/css/et-line.css',
    'public/assets/css/feather.css',
    'public/assets/css/metisMenu.css',
    'public/assets/css/slicknav.min.css',
    'public/assets/css/feather.css'
], 'public/css/all.css');

mix.combine([
    'public/assets/js/jquery.min.js',
    'public/assets/js/popper.min.js',
    'public/assets/js/bootstrap.min.js',
    'public/assets/js/owl.carousel.min.js',
    'public/assets/js/metisMenu.min.js',
    'public/assets/js/jquery.slimscroll.min.js',
    'public/assets/js/jquery.slicknav.min.js',
    'public/assets/js/modernizr-2.8.3.min.js',
    'public/assets/js/main.js',
], 'public/js/all.js');


mix.js('resources/js/app.js', 'public/js')    
.sass('resources/sass/app.scss', 'public/css');

