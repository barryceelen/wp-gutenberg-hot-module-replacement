<?php
/**
 * Main plugin file
 *
 * @package    Gutenberg_HMR
 * @author     Barry Ceelen <b@rryceelen.com>
 * @link       https://github.com/barryceelen
 * @copyright  2018 Barry Ceelen
 * @since      1.0.0
 */

namespace GutenbergHotReload\Admin;

// Enqueue editor scripts.
add_action( 'enqueue_block_editor_assets', __NAMESPACE__ . '\enqueue_editor_assets' );

/**
 * Enqueue editor scripts.
 *
 * @since 1.0.0
 */
function enqueue_editor_assets() {

	$url = GUTENBERG_HOT_RELOAD_PLUGIN_URL . 'admin/dist/block.build.js';

	if ( defined( 'WP_LOCAL_DEV' ) && WP_LOCAL_DEV ) {

		if ( file_exists( GUTENBERG_HOT_RELOAD_PLUGIN_DIR . 'admin/dist/block.dev.js' ) ) {
			$url = PRICELIST_PLUGIN_URL . 'http://localhost:8080/gutenberg-hot-module-replacement/block.dev.js';
		} elseif ( file_exists( GUTENBERG_HOT_RELOAD_PLUGIN_DIR . 'admin/dist/block.hot.js' ) ) {
			$url = 'http://localhost:8080/gutenberg-hot-module-replacement/block.hot.js';
		}
	}

	wp_enqueue_script(
		'gutenberg-hot-module-replacement',
		$url,
		array(
			'wp-blocks',
			'wp-i18n',
			'wp-element',
		),
		'1.0.1',
		true
	);
}
