const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        // require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]);

if (mix.inProduction()) {
    mix.version();
}

mix.sass('resources/assets/sass/app.scss', 'public/css');
mix.less('resources/assets/less/app.less', 'public/css');
mix.postCss('resources/assets/css/main.css', 'public/css');

mix.js('resources/assets/js/app.js', 'public/js');
mix.js('resources/js/myjs.js', 'public/js');