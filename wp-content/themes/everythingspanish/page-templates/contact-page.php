<?php
/**!
* Template Name: Contact-Page
*
* @package EverythingSpanish
*/
?>
<?php get_header(); ?>
<div class="div"></div>

<div class="heading-section-form container my-4 ">

    <div class="row">
        <div class="col-md-6 col-sm-12 text-left px-5">
            <h3>Connect with Us</h3>
            <p>
If you would like to get in touch with us please use the do so by the form supplied.
<br>
<br>

If you would like to have a post published on our page please get in touch using the form, briefly explaining the topic of which you would like to write about.
<br>
<br>
If you would like to supply images on any of the topics we would be more than happy to publish them and of course we would credit you in the description.</p>

        </div>
        <div class="col-md-6 col-sm-12 px-5">
            <h3>Send Your Message</h3>
            <div class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="97" title="Contact Form"]');?>
            </div>
        </div>
    </div>

</div>


<?php

get_footer();