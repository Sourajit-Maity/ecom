const mix = require('laravel-mix');
require('laravel-mix-alias');
var path = require('path');
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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//     .sourceMaps();

mix.js('resources/js/app.js', 'public/js').vue()
.sass('resources/sass/app.scss', 'public/css', [
        //
]);

mix.webpackConfig({
        resolve: {
            alias: {
                '@': path.resolve(__dirname, 'resources/js/')
            }
        },
        output: {
            path: path.resolve(__dirname, 'public/js/')
        }
    });