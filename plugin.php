<?php
/**
 * Main plugin file
 *
 * @package    Gutenberg_HMR
 * @author     Barry Ceelen <b@rryceelen.com>
 * @link       https://github.com/barryceelen/wp-gutenberg-hot-module-replacement
 * @copyright  2018 Barry Ceelen
 *
 * Plugin Name: Gutenberg Hot Module Replacement
 * Description: Example plugin to demonstrate hot module replacement when developing a Gutenberg block.
 * Version: 1.0.0
 * Author: Barry Ceelen
 * Author URI: https://github.com/barryceelen
 * Text Domain: gutenberg-hot-module-replacement
 * Domain Path: /languages
 */

// Don't load directly.
defined( 'ABSPATH' ) or die();

define( 'GUTENBERG_HOT_RELOAD_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'GUTENBERG_HOT_RELOAD_PLUGIN_URL', plugins_url( '/', __FILE__ ) );

if ( is_admin() ) {
	require_once GUTENBERG_HOT_RELOAD_PLUGIN_DIR . 'admin/admin.php';
}
