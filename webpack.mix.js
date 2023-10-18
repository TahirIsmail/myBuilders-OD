const mix = require('laravel-mix');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
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





mix.js("resources/js/app.js", "public/assets/frontend/default/js/app.js")
.vue({ version: 3 })
.sass("resources/sass/app.scss", "public/assets/frontend/default/css/app.css")
   
mix.webpackConfig({
    plugins: [
        new BrowserSyncPlugin({
            host: 'localhost',
            port: 3000,  // You can change the port if needed
            proxy: 'http://builderio.dev', // Your Laravel development server URL
            files: [
                'app/**/*.php',
                'resources/views/**/*.php',
                'public/js/**/*.js',
                'public/css/**/*.css',
            ],
            open: false, // Set to false to prevent the browser from opening automatically
        })
    ]
});
