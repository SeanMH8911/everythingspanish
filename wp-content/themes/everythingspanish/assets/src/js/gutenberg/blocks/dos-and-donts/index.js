/**
 * Do's and don'ts block.
 *
 * @package EverythingSpanish
 */

/**
 * Internal dependencies.
 */
import Edit from './edit';

/**
 * WordPress Dependencies.
 */
import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';
import { InnerBlocks } from '@wordpress/block-editor';

/**
 * Register block type.
 */
registerBlockType( 'everythingspanish-blocks/dos-and-donts', {
	/**
	 * Block title.
	 *
	 * @type {string}
	 */
	title: __( 'Dos and dont\'s', 'everythingspanish' ),

	/**
	 * Block icon.
	 *
	 * @type {string}
	 */
	icon: 'editor-table',

	/**
	 * Block description.
	 *
	 * @type {string}
	 */
	description: __( 'Add headings and text', 'everythingspanish' ),

	/**
	 * Block category.
	 *
	 * @type {string}
	 */
	category: 'everythingspanish',

	edit: Edit,

	save() {
		return (
			<div className="everythingspanish-dos-and-donts">
				<InnerBlocks.Content/>
			</div>
		);
	},
} );