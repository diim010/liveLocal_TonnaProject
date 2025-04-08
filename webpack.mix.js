const mix = require('laravel-mix');
const path = require('path');

// Define theme directory as the current directory
const themePath = __dirname;

// Set up correct paths
mix.setPublicPath(themePath);

// Compile SCSS
mix.sass('scss/common.scss', 'css')
   .options({
      processCssUrls: false
   })
   .sourceMaps();

// Configure webpack to use correct paths
mix.webpackConfig({
    output: {
        path: path.resolve(themePath),
        publicPath: './'
    },
    watchOptions: {
        ignored: /node_modules/,
        poll: 1000
    }
});
