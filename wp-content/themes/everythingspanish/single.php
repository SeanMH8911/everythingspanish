<?php get_header(); 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 

$author_email = get_the_author_meta( 'user_email' );
$has_avatar   = everythingspanish_has_gravatar( $author_email );
$avatar       = get_avatar( $author_email, 50, '', '', [ 'class'   => 'rounded-circle', 'default' => '404' ] );

?>

  <header>
    <!-- Jumbotron -->
    <div id="intro" class="p-5 text-center bg-light">
      <h1 class="mb-0 h2"><?php the_title();?></h1>
    </div>
    <!-- Jumbotron -->
  </header>
  

  <!--Main layout-->
  <main class="mt-4 mb-5">
    <div class="container">
      
      <div class="row">
        <!--Grid column-->
        <div class="col-md-8 mb-4">
          <!--Section: Post data-mdb-->
          <section class="border-bottom mb-4">
        <?php the_post_thumbnail('medium-large', array('class' => 'img-fluid shadow-2-strong rounded-5 mb-4')); ?>
            <div class="row meta-details d-flex mb-4">
              <div class="col-lg-6 text-center justify-content-start mb-3 m-lg-0">
                <div id="author-avatar" class="author-avatar d-flex align-items-end">
                  <?php
                  if ( ! empty( $has_avatar ) ) {
                    echo wp_kses_post( $avatar );
                  } else {
                    ?><div></div><?php
                  }
                  ?><div class="ms-2"><?php
                  everythingspanish_posted_on();
	                everythingspanish_posted_by();
                  ?>
                  </div>
                </div><!-- #author-avatar -->
              </div>

              <div class="col-lg-6 d-flex align-items-center justify-content-end">
                  <?php get_template_part( 'template-parts/svgs/share-svg' ); ?>
              </div>
            </div>
          </section>
        

          <!--Section: Text-->
          <section>
            <?php the_content();?>
          </section>
          <!--Section: Text-->
          <!--Next/Prev Buttons-->
          <div class="container d-flex justify-content-between">
            <div class="prev-link"><?php previous_post_link(); ?></div>
					  <div class="next-link"><?php next_post_link(); ?></div>
          </div>
          <!--Next/Prev Buttons-->
          <!--Section: Share buttons-->
          <section class="d-flex flex-column align-items-center border-top border-bottom py-4 mb-4">
            <h3>Share This Post</h3>
            <?php get_template_part( 'template-parts/svgs/share-svg' ); ?>
          </section>
         

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">
          <!--Section: Sidebar-->
          <section class="sticky-top" style="top: 80px;">
          <?php get_sidebar( );?>
            <!--Section: Ad-->
            <section class="text-center border-bottom pb-4 mb-4">
              <ins class="bookingaff" data-aid="2226825" data-target_aid="2226825" data-prod="dfl2" data-width="300" data-height="400" data-lang="en" data-dest_id="13444" data-dest_type="region" data-df_num_properties="4">
    <!-- Anything inside will go away once widget is loaded. -->
        <a href="//www.booking.com?aid=2226825">Booking.com</a>
</ins>

            </section>
            <!--Section: Ad-->

            <!--Section: Video-->
            <section class="text-center">
              <div class="container">
                <ins class="bookingaff" data-aid="2226832" data-target_aid="2226832" data-prod="nsb" data-width="100%" data-height="auto" data-lang="en" data-df_num_properties="3">
                    <!-- Anything inside will go away once widget is loaded. -->
                        <a href="//www.booking.com?aid=2226832">Booking.com</a>
                </ins>
              </div>
            </section>
            <!--Section: Video-->
          </section>
          <!--Section: Sidebar-->
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    
  </main>
  <!--Main layout-->


<?php
	} // end while
} // end if

get_footer();