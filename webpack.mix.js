let mix = require('laravel-mix');
let SVGSpritemapPlugin = require('svg-spritemap-webpack-plugin');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/fonts.scss', 'public/css');

mix.browserSync({
   proxy: '127.0.0.1:8000'
});


mix.webpackConfig({
   plugins: [
      new SVGSpritemapPlugin('resources/assets/svg/*.svg',{
         output: {
            filename: 'sprite.svg'
         }
      })],
   externals: {
      jquery: 'jQuery'
   }
});