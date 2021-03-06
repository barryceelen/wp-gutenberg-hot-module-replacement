const host         = 'localhost';
const isProduction = process.env.NODE_ENV === 'production';
const path         = require( 'path' );
const port         = 8080;
const packageJson  = require('./package.json');
const postfix      = process.env.POSTFIX_ENV || 'build';

module.exports = {
	devtool: isProduction ? 'production' : '',
	mode: isProduction ? 'production' : 'development',
	target: 'web',
	entry: {
		app: path.resolve( './admin/src/block.js' )
	},
	output: {
		path: path.resolve( __dirname, 'admin/dist' ),
		filename: 'block.' + postfix + '.js',
	},
	module: {
		rules: [{
		  test: /\.js?$/,
		  exclude: /node_modules/,
		  loader: 'babel-loader',
		}]
	},
	externals: {
		'react': 'React',
		'react-dom': 'ReactDOM',
	}
};

if ( ! isProduction ) {
	module.exports.output.publicPath = 'http://' + host + ':' + port + '/' + packageJson.name + '/';
	module.exports.devServer = {
		headers: { 'Access-Control-Allow-Origin': '*' },
		host: host,
		port: port,
		publicPath: '/' + packageJson.name + '/',
		watchOptions: {
			ignored: /node_modules/
		}
	};
}
