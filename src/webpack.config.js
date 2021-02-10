const webpack = require("webpack");
const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const OptimizeCSSAssets = require("optimize-css-assets-webpack-plugin");
const WebpackNotifierPlugin = require("webpack-notifier");
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

let config = {

    entry: './js/main.js',

    output: {
        path: path.resolve(__dirname, "../assets"),
        filename: 'main.min.js'
    },

    module: {
        rules: [{
            test: /\.js$/,
            exclude: /node_modules/,
            loader: "babel-loader"
        }, {
            test: /\.(sa|sc|c)ss$/,
            use: [
                {
                    loader: MiniCssExtractPlugin.loader,
                    options: {
                        publicPath: './dist/'
                    }
                },
                'css-loader?-url',
                {
                    loader: 'sass-loader?-url'
                }
            ]
        }]
    },

    plugins: [
        new WebpackNotifierPlugin({
            alwaysNotify: false,
            excludeWarnings: true,
            timeout: 1
        }),

        new MiniCssExtractPlugin({
            filename: 'main.css'
        }),

        new BrowserSyncPlugin({
          notify: false,
          host: 'localhost',
          port: 4000,
          files: ['../**/*.php'],
          proxy: 'http://dev.kaisen.fr',

          ghostMode: {
              clicks: false,
              forms: false,
              scroll: false
          },
          open: false,
          browser: "google chrome",
        }),

    ]

};


module.exports = (env, argv) => {

    if (argv.mode === 'development') {
        config.devtool = 'eval-source-map';
    }

    if (argv.mode === 'production') {

        config.optimization = {
            minimizer: [
                new UglifyJsPlugin({
                    uglifyOptions: {
                        output: {
                            comments: false
                        },
                        compress: {
                            drop_console: true
                        }
                    }
                })
            ]
        };
    }

    return config;
};
