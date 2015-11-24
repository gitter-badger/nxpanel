var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.styles('bootstrap/dist/css/bootstrap.css', 'public/css/app.css', 'node_modules')
        .scripts(['jquery/dist/jquery.js', 'bootstrap/dist/js/bootstrap.js'], 'public/js/app.js', 'node_modules')
        .stylesIn('resources/assets/css')
        .scriptsIn('resources/assets/js');
});
