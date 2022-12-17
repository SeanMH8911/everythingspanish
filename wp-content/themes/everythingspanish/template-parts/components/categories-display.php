<?php
/**
 * 
 * Catergory Display
 * 
 * @package EverythingSpanish
 */

$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC',
    'hide_empty'      => false,
) );

 ?>

<div class="container">
    <div class="row">

 <?php

foreach( $categories as $category ) {
    $image = get_field('category_image', 'category_' . $category->term_id);
    $size = 'featured-thumbnail'; // (thumbnail, medium, large, full or custom size)
    $cat_link = get_category_link($category->cat_ID);
      

     ?>
    
    <div class="category-holder col-lg-4 col-md-6 col-sm-12 ">
            <div class="category-display-img"> 
             
                <?php echo wp_get_attachment_image( $image, $size ); ?>   
                <a href="<?php echo $cat_link ?>">
                    <div class="overlay">
                        <?php echo $category->name ?>
                    </div>
                </a>
            </div>

            
    </div>
           
           <?php

} ?>

   </div>
</div>

