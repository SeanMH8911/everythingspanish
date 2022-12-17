<?php
/**
 * 
 * Catergory Button Banner
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
    <div class="row button-banner">

 <?php

foreach( $categories as $category ) {
    $cat_link = get_category_link($category->cat_ID);
      

     ?>
    
    <div class=" button-banner col-lg-2 col-md-6 col-sm-6 col-6">
                <a class="btn cat-button" href="<?php echo $cat_link ?>">
                        <?php echo $category->name ?>
                </a>
    </div>
           
           <?php

} ?>

   </div>
</div>