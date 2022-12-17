
/**
 * Heading with Icon block.
 *
 * @package EverythingSpanish
 */

import { getIconComponent } from './icons-map';

/**
 * Internal dependencies.
 */
import Edit from './edit';

/**
 * WordPress Dependencies.
 */
import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';
import { RichText } from '@wordpress/block-editor';

/**
 * Register block type.
 */
registerBlockType( 'everythingspanish-blocks/heading', {
	/**
	 * Block title.
	 *
	 * @type {string}
	 */
	title: __( 'Heading with Icon', 'everythingspanish' ),

	/**
	 * Block icon.
	 *
	 * @type {string}
	 */
	icon: 'admin-customizer',

	/**
	 * Block description.
	 *
	 * @type {string}
	 */
	description: __( 'Add Heading and select Icons', 'everythingspanish' ),

	/**
	 * Block category.
	 *
	 * @type {string}
	 */
	category: 'everythingspanish',

	/**
	 * Attributes.
	 */
	attributes: {
		option: {
			type: 'string',
			default: 'dos'
		},
		content: {
			type: 'string',
			source: 'html',
			selector: 'h4',
			default: __( 'Dos', 'everythingspanish' )
		}
	},

	edit: Edit,

	save( { attributes: { option, content } } ) {

		const HeadingIcon = getIconComponent( option );

		return (
			<div className="everythingspanish-icon-heading">
		        <span className="everythingspanish-icon-heading__heading">
		          <HeadingIcon/>
		        </span>
				{/* Saves <h2>Content added in the editor...</h2> to the database for frontend display */}
				<RichText.Content tagName="h4" value={ content } />
			</div>
		);
	},
} );