const HtmlWebpackPlugin = require('html-webpack-plugin');
const path = require ('path');
const Html
module.exports={
    entry:'./src/index.js',
    output:{
        filanme: 'bundle.js',
        path: path.resolve(__dirname,'dist')
    },
    plugins:[
        new HtmlWebpackPlugin({
            template 
        }
    ]
    mode: "production"
}