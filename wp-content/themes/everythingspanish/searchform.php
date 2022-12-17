<?php
/**
 * Custom Search Form.
 */

?>

<form role="search" method="get" class="form-inline search-form " action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'everythingspanish' ); ?></span>
	<input class="form-control input-section mr-sm-2" type="search" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'everythingspanish' ); ?>" value="<?php the_search_query(); ?>" aria-label="Search" name="s">
	<button class="btn search-button" type="submit"><?php echo esc_attr_x( 'Search', 'submit button', 'everythingspanish' ); ?></button>
</form>
