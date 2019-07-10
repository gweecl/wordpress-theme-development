/*
 |--------------------------------------------------------------------------
 | Make use of Laravel Mix for compiling assets
 |--------------------------------------------------------------------------
 */

const mix = require('laravel-mix');

// Change Default Larvel Mix WebPack Config
mix.setPublicPath('dist'); 
mix.setResourceRoot('/wp-content/themes/' + path.relative('../', 'dist'));

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

mix.js('static/site.js', 'dist/js')
    .sass('static/style.scss', 'dist/css')
    .sass('static/style-editor.scss', 'dist/css')
    .sass('static/style-editor-customizer.scss', 'dist/css')
    .sass('static/print.scss', 'dist/css');

// Versioning only in Production
if (mix.inProduction()) {
    mix.version();
}
