<?php
/**
 * Theme Sidebars.
 *
 * @package EverythingSpanish
 */

namespace EVERYTHINGSPANISH_THEME\Inc;

use EVERYTHINGSPANISH_THEME\Inc\Traits\Singleton;

/**
 * Class Assets
 */
class Sidebars {

	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {
		$this->setup_hooks();
	}

	/**
	 * To register action/filter.
	 *
	 * @return void
	 */
	protected function setup_hooks() {

		/**
		 * Actions
		 */
		add_action( 'widgets_init', [ $this, 'register_sidebars' ] );
		

	}

	/**
	 * Register widgets.
	 *
	 * @action widgets_init
	 */
	public function register_sidebars() {

		register_sidebar(
			[
				'name'          => esc_html__( 'Sidebar', 'everythingspanish' ),
				'id'            => 'sidebar-1',
				'description'   => '',
				'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			]
		);
		register_sidebar(
			[
				'name'          => esc_html__( 'front', 'everythingspanish' ),
				'id'            => 'sidebar-2',
				'description'   => '',
				'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			]
		);

		register_sidebar(
			[
				'name'          => esc_html__( 'Footer', 'everythingspanish' ),
				'id'            => 'sidebar-3',
				'description'   => '',
				'before_widget' => '<div id="%1$s" class="widget widget-footer cell column %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h4 class="widget-title">',
				'after_title'   => '</h4>',
			]
		);

	}


}