<?php
/**
 * Register Post Types
 *
 * @package EverythingSpanish
 */

namespace EVERYTHINGSPANISH_THEME\Inc;

use EVERYTHINGSPANISH_THEME\Inc\Traits\Singleton;

class Register_Post_Types {
	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'init', [ $this, 'create_property_cpt' ], 0 );


	}

	// Register Custom Post Type Property
function create_property_cpt() {

	$labels = array(
		'name' => _x( 'Properties', 'Post Type General Name', 'everythingspanish' ),
		'singular_name' => _x( 'Property', 'Post Type Singular Name', 'everythingspanish' ),
		'menu_name' => _x( 'Properties', 'Admin Menu text', 'everythingspanish' ),
		'name_admin_bar' => _x( 'Property', 'Add New on Toolbar', 'everythingspanish' ),
		'archives' => __( 'Property Archives', 'everythingspanish' ),
		'attributes' => __( 'Property Attributes', 'everythingspanish' ),
		'parent_item_colon' => __( 'Parent Property:', 'everythingspanish' ),
		'all_items' => __( 'All Properties', 'everythingspanish' ),
		'add_new_item' => __( 'Add New Property', 'everythingspanish' ),
		'add_new' => __( 'Add New', 'everythingspanish' ),
		'new_item' => __( 'New Property', 'everythingspanish' ),
		'edit_item' => __( 'Edit Property', 'everythingspanish' ),
		'update_item' => __( 'Update Property', 'everythingspanish' ),
		'view_item' => __( 'View Property', 'everythingspanish' ),
		'view_items' => __( 'View Properties', 'everythingspanish' ),
		'search_items' => __( 'Search Property', 'everythingspanish' ),
		'not_found' => __( 'Not found', 'everythingspanish' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'everythingspanish' ),
		'featured_image' => __( 'Featured Image', 'everythingspanish' ),
		'set_featured_image' => __( 'Set featured image', 'everythingspanish' ),
		'remove_featured_image' => __( 'Remove featured image', 'everythingspanish' ),
		'use_featured_image' => __( 'Use as featured image', 'everythingspanish' ),
		'insert_into_item' => __( 'Insert into Property', 'everythingspanish' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Property', 'everythingspanish' ),
		'items_list' => __( 'Properties list', 'everythingspanish' ),
		'items_list_navigation' => __( 'Properties list navigation', 'everythingspanish' ),
		'filter_items_list' => __( 'Filter Properties list', 'everythingspanish' ),
	);
	$args = array(
		'label' => __( 'Property', 'everythingspanish' ),
		'description' => __( 'Property Listings', 'everythingspanish' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-multisite',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'post-formats', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => false,
		'capability_type' => 'post',
	);
	register_post_type( 'property', $args );

}
}
