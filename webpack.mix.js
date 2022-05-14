const mix = require('laravel-mix');

//Admin
//CSS
mix.sass('resources/assets/admin/scss/admin.scss', 'public/assets/admin/css')

//JS
    .js('resources/assets/admin/script/admin.js', 'public/assets/admin/script')


//Site
//CSS
    .sass('resources/assets/site/scss/app.scss', 'public/assets/site/css')

//JS
    .js('resources/assets/site/script/app.js', 'public/assets/site/script')
/// images

.copy('resources/assets/site/images/', 'public/assets/site/images/');
// mix.copyDirectory('resources/assets/site/images/', 'public/assets/site/images/');
