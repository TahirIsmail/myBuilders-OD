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
 mix.webpackConfig({
    module: {
      rules: [
        {
          test: /\.(scss)$/,
          use: [
            'style-loader', // inject CSS to page
            'css-loader', // translates CSS into CommonJS modules
            {
              loader: 'postcss-loader',
              options: {
                postcssOptions: {
                  // postcss plugins, can be exported to postcss.config.js
                  plugins: () => [
                    require('autoprefixer')
                  ]
                }
              }
            },
            'sass-loader' // compiles Sass to CSS
          ]
        }
      ]
    },
    plugins: [
      new BrowserSyncPlugin({
        host: 'localhost',
        port: 3000,
        proxy: 'http://builderio.dev',
        files: [
          'app/**/*.php',
          'resources/views/**/*.php',
          'public/js/**/*.js',
          'public/css/**/*.css'
        ],
        open: false
      })
    ]
  });




mix.js("resources/js/app.js", "public/assets/backend/default/js/app.js")
.vue({ version: 3 })
.sass("resources/sass/app.scss", "public/assets/backend/default/css/app.css")
   

