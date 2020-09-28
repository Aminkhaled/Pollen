<?php
get_header();
?>
<div class="reservation">
   <?php
   global $post;
   $background_image = ( has_post_thumbnail($post->ID) ? wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'page_background' ) : '' );


   ?>
    <div class="jumbotron" style='background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.8)),url("<?php echo $background_image[0];?>")) no-repeat fixed;background-size: cover;'>
        <div class="container for-about">

                   <h1><?php echo esc_attr( get_the_title() )?></h1>


            <p>
                We are looking forward to meet you
            </p>
        </div>
    </div>
</div>

<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-img">
                    <img src="<?php bloginfo('template_directory'); ?>/vendor/img/gallery/gallery-4.jpg" alt="about-us">
                    <div class="background-img"></div>
                </div>
            </div>
            <!--        col-md-6-->
            <div class="col-md-6">
                <div class="about-caption">

                    <h2>
                        <?php echo esc_attr( get_the_title() )?>

                    </h2>

                        <?php

                        $the_content = apply_filters('the_content', get_the_content());
                        if ( !empty($the_content) ) {
                            echo ($the_content);                        }
                        ?>


                    <a href="#" class="about-btn">Know more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>
