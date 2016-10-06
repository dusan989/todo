'use-strict';

var webpack = require('webpack');
var autoprefixer = require('autoprefixer');
var ExtractTextPlugin = require('extract-text-webpack-plugin');
var path = require('path');
var CommonsChunkPlugin = webpack.optimize.CommonsChunkPlugin;


module.exports = {
  devtool: 'source-map',

  /**
   * Entry
   * Reference: http://webpack.github.io/docs/configuration.html#entry
   */
  entry: {
    admin: './resources/assets/js/admin.js',
    vendor: [
      'angular',
      'angular-ui-router',
      'angular-ui-bootstrap',
      'lodash'
    ]
  },

  output: {
      // Absolute output directory
      path: path.join(__dirname, '/public/js/'),

      // Filename for entry points
      filename: '[name].bundle.js',

      // Filename for non-entry points
      chunkFilename: '[name].bundle.js'
  },

  sassLoader: {
    outputStyle: 'compressed',
    precision: 10,
    sourceComments: false
  },

  babel: {
    shouldPrintComment(commentContents) {
      // keep `/*@ngInject*/`
      return /@ngInject/.test(commentContents);
    }
  },

  module: {
    preLoaders: [],
    loaders: [
      {
        // JS LOADER
        // Reference: https://github.com/babel/babel-loader
        // Transpile .js files using babel-loader
        // Compiles ES6 and ES7 into ES5 code
        test: /\.js$/,
        loader: 'babel',
        include: [
          path.resolve(__dirname, 'resources/assets/js/'),
          path.resolve(__dirname, 'node_modules/lodash-es/')
        ]
      },
      {
        // ASSET LOADER
        // Reference: https://github.com/webpack/file-loader
        // Copy png, jpg, jpeg, gif, svg, woff, woff2, ttf, eot files to output
        // Rename the file using the asset hash
        // Pass along the updated reference to your code
        // You can add here any file extension you want to get copied to your output
        test: /\.(png|jpg|jpeg|gif|svg|woff|woff2|ttf|eot)([\?]?.*)$/,
        loader: 'file'
      },
      {

        // HTML LOADER
        // Reference: https://github.com/webpack/raw-loader
        // Allow loading html through js
        test: /\.html$/,
        loader: 'raw'
      },
      {
        // CSS LOADER
        // Reference: https://github.com/webpack/css-loader
        // Allow loading css through js
        //
        // Reference: https://github.com/postcss/postcss-loader
        // Postprocess your css with PostCSS plugins
        test: /\.css$/,
        // Reference: https://github.com/webpack/extract-text-webpack-plugin
        // Extract css files in production builds

        // Reference: https://github.com/webpack/style-loader
        // Use style-loader in development for hot-loading
        loader: ExtractTextPlugin.extract({
          loader: 'css?sourceMap!postcss',
          fallbackLoader: 'style'
        })
      },
      {
        // SASS LOADER
        // Reference: https://github.com/jtangelder/sass-loader
        test: /\.(scss|sass)$/,
        loader: ExtractTextPlugin.extract({
          loader: ['css?sourceMap', 'sass?sourceMap'],
          fallbackLoader: 'style'
        }),
        include: [
          path.resolve(__dirname, 'node_modules/bootstrap-sass/assets/stylesheets/*.scss'),
          path.resolve(__dirname, 'resources/assets/js/admin.scss')
        ]
      }
    ]
  },

  /**
   * PostCSS
   * Reference: https://github.com/postcss/autoprefixer-core
   * Add vendor prefixes to your css
   */
  postcss: [
    autoprefixer({
      browsers: ['last 2 version']
    })
  ],

  plugins: [
    // Reference: https://github.com/webpack/extract-text-webpack-plugin
    // Extract css files
    new ExtractTextPlugin('[name].css'),

    new CommonsChunkPlugin({
      name: 'vendor',

      // filename: "vendor.js"
      // (Give the chunk a different name)

      minChunks: Infinity
      // (with more entries, this ensures that no other module
      //  goes into the vendor chunk)
    })
  ],

  cache: false
};
