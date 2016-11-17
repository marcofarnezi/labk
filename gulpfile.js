const elixir = require('laravel-elixir'),
      liveReload = require('gulp-livereload'),
      clean = require('gulp-clean'),
      gulp = require('gulp');

var config = {
    assets_path: './resources/assets',
    build_path: '.public/build'
};

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

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');
});
