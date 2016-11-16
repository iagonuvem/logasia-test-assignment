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
	
	// Compiling Sass
    mix.sass([
       './resources/assets/sass/app.scss'
    ], 'public/css/app.css');

    // Copying Styles
    mix.styles([
        './bower_components/angular-material/angular-material.min.css',
        './bower_components/angular-material/angular-material.layouts.min.css',
        './bower_components/material-design-lite/material.min.css',
        './bower_components/material-calendar/angular-material-calendar.min.css'
    ],  'public/css/vendor.css');

    // Copying Scripts
    mix.scripts([
        './bower_components/angular/angular.min.js',
        './bower_components/angular-animate/angular-animate.min.js',
        './bower_components/angular-aria/angular-aria.min.js',
        './bower_components/angular-sanitize/angular-sanitize.min.js',
        './bower_components/angular-material/angular-material.min.js',
        './bower_components/material-design-lite/material.min.js',
        './bower_components/material-calendar/angular-material-calendar.js'
    ],  'public/js/vendor.js');


});
