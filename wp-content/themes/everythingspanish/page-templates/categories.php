<?php
/**!
* Template Name: Categories
*
* @package EverythingSpanish
*/
?>
<?php get_header(); ?>


<div class="container mb-5 text-center">
    <!-- <H1>Categories</H1> -->
	<div class="row">
		<div class="">
				<?php get_template_part( 'template-parts/components/categories-display' ); ?>
		</div>
	</div>
	
</div>


<?php

get_footer();