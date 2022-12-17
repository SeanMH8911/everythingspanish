<?php 
/*
* Content Template
*
*@package EverythingSpanish
*/


$container_classes = !empty( $args['container_classes'] ) ? $args['container_classes'] : 'mb-5';
?>



<article id="post-<?php the_ID(); ?>" <?php post_class( $container_classes ); ?>>
	<?php
	get_template_part( 'template-parts/components/blog/entry-header' );
	get_template_part( 'template-parts/components/blog/entry-meta' );
	get_template_part( 'template-parts/components/blog/entry-content' );
	get_template_part( 'template-parts/components/blog/entry-footer' );
	?>
</article>


<!-- 
  <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="dark">
                  <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                  <a href="<?php echo get_permalink() ?>">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <p class="card-text">
                  <?php the_excerpt();?>
                </p>
                <a href="<?php echo get_permalink() ?>" class="btn btn-primary">Read</a>
              </div>
            </div> -->