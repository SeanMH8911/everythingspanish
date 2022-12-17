<?php 
/**
 *
 *  The template for displaying 404 pages (Not Found)
 * 
 * @package EverythingSpanish
 */
get_header();
?>


<div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
 
           <div class="container text-center m-5">
                <header class="page-header">
                <h1 class="page-title"><?php _e( 'Not Found', 'everythingspanish' ); ?></h1>
            </header>
 
            <div class="page-wrapper">
                <div class="page-content">
                    <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'everythingspanish' ); ?></h2>
                    <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'everythingspanish' ); ?></p>
 
                    <?php get_search_form(); ?>
                </div><!-- .page-content -->
            </div><!-- .page-wrapper -->
 
           </div>
        </div><!-- #content -->
    </div><!-- #primary -->

    <?php
    get_footer();