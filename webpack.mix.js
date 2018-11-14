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

mix
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .js('resources/js/main.js', 'public/js')
    .sass('resources/sass/main.scss', 'public/css')
    .js('resources/js/scripts.js', 'public/js')
    .sass('resources/sass/styles.scss', 'public/css')
    .js('resources/js/vendor.js', 'public/js')
    .sass('resources/sass/vendor.scss', 'public/css')
    .js('resources/js/page.js', 'public/js')
    .sass('resources/sass/page.scss', 'public/css');
