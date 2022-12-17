<?php
/**
 * Theme Functions.
 *
 * @package EverythingSpanish
 */


if ( ! defined( 'EVERYTHINGSPANISH_DIR_PATH' ) ) {
	define( 'EVERYTHINGSPANISH_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'EVERYTHINGSPANISH_DIR_URI' ) ) {
	define( 'EVERYTHINGSPANISH_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'EVERYTHINGSPANISH_BUILD_URI' ) ) {
	define( 'EVERYTHINGSPANISH_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'EVERYTHINGSPANISH_BUILD_PATH' ) ) {
	define( 'EVERYTHINGSPANISH_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'EVERYTHINGSPANISH_BUILD_JS_URI' ) ) {
	define( 'EVERYTHINGSPANISH_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'EVERYTHINGSPANISH_BUILD_JS_DIR_PATH' ) ) {
	define( 'EVERYTHINGSPANISH_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'EVERYTHINGSPANISH_BUILD_IMG_URI' ) ) {
	define( 'EVERYTHINGSPANISH_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'EVERYTHINGSPANISH_BUILD_CSS_URI' ) ) {
	define( 'EVERYTHINGSPANISH_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'EVERYTHINGSPANISH_BUILD_CSS_DIR_PATH' ) ) {
	define( 'EVERYTHINGSPANISH_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

if ( ! defined( 'EVERYTHINGSPANISH_BUILD_LIB_URI' ) ) {
	define( 'EVERYTHINGSPANISH_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
}

if ( ! defined( 'EVERYTHINGSPANISH_ARCHIVE_POST_PER_PAGE' ) ) {
	define( 'EVERYTHINGSPANISH_ARCHIVE_POST_PER_PAGE', 9 );
}

if ( ! defined( 'EVERYTHINGSPANISH_SEARCH_RESULTS_POST_PER_PAGE' ) ) {
	define( 'EVERYTHINGSPANISH_SEARCH_RESULTS_POST_PER_PAGE', 9 );
}

require_once EVERYTHINGSPANISH_DIR_PATH . '/inc/helpers/autoloader.php';
require_once EVERYTHINGSPANISH_DIR_PATH . '/inc/helpers/template-tags.php';

function everythingspanish_get_theme_instance() {
	\EVERYTHINGSPANISH_THEME\Inc\EVERYTHINGSPANISH_THEME::get_instance();
}

everythingspanish_get_theme_instance();





