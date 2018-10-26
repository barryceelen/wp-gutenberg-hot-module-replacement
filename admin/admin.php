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

	$path = GUTENBERG_HOT_RELOAD_PLUGIN_URL . 'admin/dist/block.build.js';

	if ( defined( 'GB_HOT_MODULE_REPLACE' ) && GB_HOT_MODULE_REPLACE ) {
		$path = 'http://localhost:' . GB_HOT_MODULE_REPLACE . '/gutenberg-hot-module-replacement/block.hot.js';
	}

	wp_enqueue_script(
		'gutenberg-hot-module-replacement',
		$path,
		array(
			'wp-blocks',
			'wp-i18n',
			'wp-element'
		)
	);
}
