var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');

    mix.styles(['bootstrap.min.css']);

    mix.scripts([
    	'markerclusterer-1.0.2.min.js',
    	'jquery-1.11.3.min.js',
    	'bootstrap.min.js',
    	'script.js',
	]);
});