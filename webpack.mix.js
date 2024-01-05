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





mix.js("resources/js/app.js", "public/assets/common/js")
.js("resources/js/app_tradesmen.js","public/assets/common/js").vue({ version: 3 })
.sass("resources/sass/app.scss", "public/assets/common/css/app.css")
   
mix.webpackConfig({
    resolve: {
        alias: {
            'mapbox-gl$': 'mapbox-gl/dist/mapbox-gl.js',
        },
    },
    plugins: [
        new BrowserSyncPlugin({
            host: 'localhost',
            port: 3000,  // You can change the port if needed
            proxy: 'http://buildervalley.test', // Your Laravel development server URL
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
