<?php
/**
 * Template Name: Viewall
 *
 * @package EverythingSpanish
 */

use EVERYTHINGSPANISH_THEME\Inc\Loadmore_Posts;

get_header();

$loadmore_posts = Loadmore_Posts::get_instance();

?>

<div class="container">
	<h1 class="mb-4 text-center">Explore All Posts</h1>
	<?php $loadmore_posts->post_script_load_more(); ?>
</div>


<?php

get_footer();