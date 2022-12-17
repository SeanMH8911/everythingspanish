<?php 
/*
* Template Name: Front-Page
*
*@package EverythingSpanish
*/
?>

<?php get_header('front');
?>





<!-- Category Banner -->
<div class="container-fluid" id="button-banner">
	<?php get_template_part( 'template-parts/components/category-buttons-banner' ); ?>
</div>
<!-- Category Banner -->

<section>
	<div class="container mt-5 ">
		<div class="container ">
			<div class="row d-flex justify-content-center">
				<div class="left-content col-lg-4 col-md-6 col-sm-12">
					<section>
						<h2 class="text-center">¡Bienvenido!</h2>
						<span>
							<p class="text-left">
								Everything Spanish is exactly what you will find here. We cover all topics about Spanish food, culture, language, TV, travel, plus much more.
							</p>
							<hr style="height:1px; border:none; color:black; background-color:#000; width:80%">
							<p class="text-left">
								Why you ask? 
							</p>
							
							<p class="text-left">
								Simply because I love Spain and everything Spanish, and I want to be able to share that love with like minded people.
								I also want to create a place where people can come, and escape their daily routine to discover, learn, or dream about their next holiday destination.
							</p>
							<hr style="height:1px; border:none; color:black; background-color:#000; width:80%">
							<p class="text-left">
								If you would like to contribute any content please get in touch with us using the contact page, and don't forget to subscribe to keep upto date with all the latest posts.
							</p>
						</span>
					</section>
				</div>
				<div class=" image-content col-lg-8 col-md-6 col-sm-12">
					<div class="image-holder">
						<?php get_sidebar('front'); ?>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

  <!--Main layout-->
  <main class="my-5">
    <div class="container">
      <!--Section: Content-->
      <section class="text-center">
        <h4 id="latest-posts" class="mb-5"><strong>Latest posts</strong></h4>

        <?php
			if ( have_posts() ) :
				?>
				<div class="container">
					<?php
					if ( is_home() && ! is_front_page() ) {
						?>
						<?php
					}
					?>

					<div class="row">
						<?php
						$index         = 0;
						$no_of_columns = 1;

						while ( have_posts() ) : the_post();

							if ( 0 === $index % $no_of_columns ) {
								?>
								<div class="col-lg-4 col-md-6 col-sm-12 ">
								<?php
							}

								
             get_template_part( 'template-parts/content');
            
              

							$index ++;

							if ( 0 !== $index && 0 === $index % $no_of_columns ) {
								?>
								</div>
								<?php
							}

						endwhile;
						?>
					</div>
				</div>
			<?php

			else :

				get_template_part( 'template-parts/content-none' );

			endif;

			
			?>

      </section>
      <!--Section: Content-->

      
    </div>
	
  </main>
  <!--Main layout-->
    


<?php

get_footer();
