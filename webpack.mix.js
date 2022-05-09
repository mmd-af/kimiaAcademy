const mix = require('laravel-mix');

mix.js('resources/js/admin/admin.js', 'public/js')
    .sass('resources/scss/admin/admin.scss', 'public/css')
    .js('resources/js/site/site.js', 'public/js')
    .sass('resources/scss/site/site.scss', 'public/css');
