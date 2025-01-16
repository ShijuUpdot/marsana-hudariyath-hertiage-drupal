var webpack = require("webpack");
var path  = require("path");

var DIST_PATH = path.resolve(__dirname, "dist/");
var SRC_PATH = path.resolve(__dirname, "src/");

var config = {
  entry : SRC_PATH + "/app/index.js",
  mode: 'production',
  output: {
    path: DIST_PATH + "/app",
    filename: "bundle.js",
  },
  watch: true,
  module:{
    rules: [
      {
        test: /\.jsx?/,
        include: SRC_PATH,
        loader: "babel-loader",
        query : {
          presets:["react", "es2015"]
        },
      },
      {
        test: /\.css$/,
        use: [ 'style-loader', 'css-loader' ]
      },
      {
        test: /\.(jpe?g|png|gif|svg)$/,
        include: [SRC_PATH],
        use: [
          {
            loader: "file-loader",
            options: {
              name: "[name].[hash:base64:8].[ext]",
            },
          },
          {
            loader: "img-loader",
            options: {
            },
          },
        ],
      },
    ]
  },
  plugins: [
    new webpack.DefinePlugin({
      'process.env.NODE_ENV': JSON.stringify('production')
    })
  ],

};

module.exports = config;