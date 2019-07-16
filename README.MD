# WordPress Gutenberg Hot Module Replacement Example

An example plugin demonstrating how to use React's [hot module replacement](https://webpack.js.org/concepts/hot-module-replacement/) when developing a Gutenberg block. No more death by a thousand ~~cuts~~ reloads. Your <kbd>command</kbd> + <kbd>R</kbd> keys will thank you.

## Install dependencies and run build script

1. Define the `WP_LOCAL_DEV` constant in your development environment
1. `npm install`: Install plugin dependencies via npm
1. `npm run dev`: Development without hot module replacement, you'll need to reload the page after every change
1. `npm run hot`: Development with hot module replacement
1. `npm run build`: To build the block for use on a production server:
