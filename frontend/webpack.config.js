const path = require('path');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const ForkTsCheckerWebpackPlugin = require('fork-ts-checker-webpack-plugin');
// const BundleAnalyzerPlugin = require('webpack-bundle-analyzer').BundleAnalyzerPlugin;

module.exports = {
  entry: path.resolve(__dirname, 'src'),
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'dist'),
  },
  devtool: 'source-map',

  resolve: {
    extensions: ['.ts', '.tsx', '.js', '.json'],
  },

  module: {
    rules: [{
      test: /\.(ts|js)x?$/,
      use: {
        loader: 'babel-loader',
        options: {
          presets: [
            '@babel/env',
            '@babel/typescript',
            "@babel/preset-react"
          ],
          plugins: ['@babel/proposal-class-properties'],
        },
      },
      exclude: /node_modules/,
    }],
  },
  performance: {
     hints: process.env.NODE_ENV === 'production'
  },
  plugins: [
    //
    // new BundleAnalyzerPlugin({
    //   generateStats: true
    // }),
    // Re-generate index.html with injected script tag.
    // The injected script tag contains a src value of the
    // filename output defined above.
    new HtmlWebpackPlugin({
      inject: true,
      template: './public/index.html',
    }),
    new ForkTsCheckerWebpackPlugin()
  ],

  devServer: {
    contentBase: './dist',
    port: 3077
  },
};
