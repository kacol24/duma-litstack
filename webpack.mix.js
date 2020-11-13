const mix = require('laravel-mix');
require('./laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets');

mix.jigsaw()
   .sass('source/_assets/sass/app.scss', 'css')
   .options({
       processCssUrls: false
   })
   .version();
