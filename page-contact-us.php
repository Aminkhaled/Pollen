<?php
get_header();?>


<div class="reservation">
    <?php
    global $post;
    $background_image = ( has_post_thumbnail($post->ID) ? wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'page_background' ) : '' );
    $page_medium = ( has_post_thumbnail($post->ID) ? wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'page_medium' ) : '' );

    ?>
    <div class="jumbotron" style="
            background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.8)),url('<?php echo $background_image[0]?>') no-repeat fixed;
            background-size: cover;
            height: 500px;
            ">
        <div class="container for-about">
            <h1><?php echo esc_attr( get_the_title() )?></h1>
            <p>
                take a order now

            </p>
        </div>
    </div>
</div>
<section class="contact pt-100 pb-100" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 mx-auto text-center">
                <div class="section-title mb-100">
                    <p>get in touch</p>
                    <h4>contact us</h4>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-8">
                <form  class="contact-form">

                        <?php echo do_shortcode('[contact-form-7 id="40" title="contact form"]') ?>
                    </div>
            <div class="col-md-4">
                <div class="single-contact">
                    <i class="fa fa-map-marker"></i>
                    <h5>Address</h5>
                    <p>
                        114 El Haram St, Beside El Haram Hospital, First Floor Apartment 111, Giza, Egypt.
                    </p>
                </div>
                <div class="single-contact">
                    <i class="fa fa-phone"></i>
                    <h5>Telephone/Fax</h5>
                    <p>+(202)37714600</p>
                </div>
                <div class="single-contact">
                    <i class="fa fa-envelope"></i>
                    <h5>Email</h5>
                    <p>spotlineagency@gmail.com</p>
                </div>
            </div>

            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
