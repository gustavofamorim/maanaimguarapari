let mix = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/global.scss', 'public/css')
   .copyDirectory('resources/assets/img', 'public/img')
   .copyDirectory('node_modules/font-awesome/fonts/*', 'public/fonts');
   
mix.webpackConfig({
   plugins: [
       new BrowserSyncPlugin({
           files: [
               'app/**/*',
               'public/**/*',
               'resources/**/*',
               'routes/**/*'
           ],
           port: 8082
       })
   ]
});