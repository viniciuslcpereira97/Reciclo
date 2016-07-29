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
    mix.sass('app.scss')
    .styles([
        './node_modules/materialize-css/dist/css/materialize.css',
        './node_modules/materialize-css/dist/css/materialize.min.css',
        './node_modules/materialize-css/dist/fonts/roboto/',
    ])
    .scripts([
        './node_modules/jquery/dist/jquery.min.js',
        './node_modules/materialize-css/dist/js/materialize.min.js',
        './resources/assets/js/scripts.js',
        './resources/assets/js/firebase/firebase_connection.js',
        // './resources/assets/js/firebase/firebase_recipes.js',
    ]);
});
