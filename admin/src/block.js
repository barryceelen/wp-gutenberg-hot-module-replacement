/**
 * WordPress dependencies
 */
const {
	__
} = wp.i18n;

const {
	registerBlockType
} = wp.blocks;

/**
 * Internal dependencies.
 */
import HotComponent from "./hot-component.js"

registerBlockType( 'gutenberg-hot-module-replacement/example', {
	title: __( 'Hot Module Replacement Example' ),
	icon: '',
	category: 'common',
	supports: {
		html: false,
	},
	edit() {
		return (
			<div>
				<strong>1. Changing this title will reload the whole page.</strong>
				<HotComponent />
			</div>
		);
	},
	save() {
		return null;
	},
} );
