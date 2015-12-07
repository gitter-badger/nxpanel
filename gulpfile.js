var elixir = require('laravel-elixir');

require('laravel-elixir-vueify');

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
    mix.styles(['bootstrap/dist/css/bootstrap.css', 'font-awesome/css/font-awesome.css'], 'public/css/app.css', 'node_modules')
        .scripts(['jquery/dist/jquery.js', 'bootstrap/dist/js/bootstrap.js'], 'public/js/app.js', 'node_modules')
        .stylesIn('resources/assets/css')
        .copy('node_modules/font-awesome/fonts', 'public/fonts')
        .copy('node_modules/bootstrap/fonts', 'public/fonts');

    mix.browserify('main.js');
});
