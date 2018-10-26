# WordPress Gutenberg Hot Module Replacement Example

An example plugin demonstrating how to use React's hot module replacement while developing a Gutenberg block. No more death by a thousand ~~cuts~~ reloads. Your <kbd>command</kbd> + <kbd>R</kbd> keys will thank you.

## Set up plugin

Install plugin dependencies via npm: `npm install`

## Development with hot module replacement

First define the `GB_HOT_MODULE_REPLACE` constant in your development environment, eg. in your wp-config.php file. Note: Do not do this in on your production server: `define('GB_HOT_MODULE_REPLACE', '8080');`. The `8080` represents the port number the assets will be loaded from during development. Define a different port if `8080` doesn't fit your setup.

Run watch task: `npm run hot`

## Development without hot module replacement

You'll need to reload the page after each change to your Gutenberg block. Do not set `define('GB_HOT_MODULE_REPLACE', '8080');`, else the plugin will load the incorrect JavaScript file.

Run watch task: `npm run dev`


## Build plugin

To build the block for use on a production server: `npm run build`
