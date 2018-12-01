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
    .setPublicPath('public')
    .js('resources/js/app.js', 'js')
    .sass('resources/sass/app.scss', 'css')
    .js('resources/js/main.js', 'js')
    .sass('resources/sass/main.scss', 'css')
    .js('resources/js/scripts.js', 'js')
    .sass('resources/sass/styles.scss', 'css')
    .js('resources/js/vendor.js', 'js')
    .sass('resources/sass/vendor.scss', 'css')
    .js('resources/js/page.js', 'js')
    .sass('resources/sass/page.scss', 'css');

    
