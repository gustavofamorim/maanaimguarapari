let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

mix.webpackConfig({
   plugins: [
       new BrowserSyncPlugin({
           files: [
               'app/**/*',
               'public/**/*',
               'resources/views/**/*',
               'routes/**/*'
           ],
           port: 8082
       })
   ]
});