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
   .sass('resources/sass/app.scss', 'public/css');

 mix.styles([
 	"resources/css/style.css",
 	"resources/css/custom.css",
 	"resources/css/pace.min.css",
 	"resources/vendors/css/vendor.bundle.base.css",
 	"resources/vendors/css/vendor.bundle.addons.css",
 	"resources/vendors/iconfonts/mdi/css/materialdesignicons.min.css"
 	], 'public/css/all.css');

mix.scripts([
	"resources/vendors/js/vendor.bundle.base.js",
	"resources/vendors/js/vendor.bundle.addons.js"
	],"public/js/plugins.js");

mix.scripts([
	"resources/js/off-canvas.js",
	"resources/js/misc.js",
	"resources/js/dropzone1.js",
	"resources/js/toastr.min.js",
	"resources/js/validate.js"
	],"public/js/all.js");
