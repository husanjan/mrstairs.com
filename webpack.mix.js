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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/old-app.js', 'public/js')
    .css('resources/css/old-app.css', 'public/css');
mix.js('resources/js/Frontend/Auth/Login/old-app.js', 'public/js');
mix.postCss('resources/css/Frontend/Auth/Login/old-login.css', 'public/css');
mix.postCss('resources/css/Frontend/Auth/Lost/base.min.css', 'public/css');
mix.postCss('resources/css/Frontend/Auth/Lost/widget-nav.min.css', 'public/css');
mix.postCss('resources/css/Frontend/Auth/Lost/widget-layered-nav-stock-status.min.css', 'public/css');
mix.postCss('resources/css/Frontend/Auth/Lost/woo-widget-active-filters.min.css', 'public/css');
mix.postCss('resources/css/Frontend/Auth/Lost/footer-base.min.css', 'public/css');