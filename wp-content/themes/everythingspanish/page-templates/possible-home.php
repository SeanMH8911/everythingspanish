<?php
/**!
* Template Name: Home
*
* @package EverythingSpanish
*/
?>
<?php get_header(); 

     $query_options = array(
         'posts_per_page' => 9,
     );
     $the_query = new WP_Query( $query_options ); 
?>
    

<!-- 
<div class="main">
<!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/041.webp');
      height: 400px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">ME ENCANTA ESPAÑA</h1>
          <h4 class="mb-3">For The Love Of Spain And Everything Spanish
</h4>
          <a class="btn btn-outline-light btn-lg" href="#!" role="button"
          >View Latest Posts</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->


    <section class="text-center">
        <h1>Latest Posts</h1>
        <div class="container text-center">
            <div class="row">
                <?php
                    while ($the_query -> have_posts()) : $the_query -> the_post(); 
                get_template_part( 'template-parts/content', '', [ 'container_classes' => 'col-lg-4 col-md-6 col-sm-12 pb-4' ] );
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
</div> -->

<?php
get_footer();