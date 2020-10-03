<!DOCTYPE html>
<html lang="en">
<head>

    <title><?php bloginfo('title'); ?> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="href="<?php bloginfo('template_directory'); ?>/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://md-aqil.github.io/images/swiper.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/css/blog-post.css">
</head>
<body class="blog-post">
<div class="loader">
    <svg version="1.1" id="L2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
<circle fill="none" stroke="#fff" stroke-width="4" stroke-miterlimit="10" cx="50" cy="50" r="48"/>
        <line fill="none" stroke-linecap="round" stroke="#fff" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="85" y2="50.5">
            <animateTransform
                attributeName="transform"
                dur="2s"
                type="rotate"
                from="0 50 50"
                to="360 50 50"
                repeatCount="indefinite" />
        </line>
        <line fill="none" stroke-linecap="round" stroke="#fff" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="49.5" y2="74">
            <animateTransform
                attributeName="transform"
                dur="15s"
                type="rotate"
                from="0 50 50"
                to="360 50 50"
                repeatCount="indefinite" />
        </line>
</svg>
</div>

<article class="c-article">
    <?php
    if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    ?>
    <div class="c-article__header">
       <?php the_post_thumbnail('post_product_image'); ?>
    </div>

    <div class="c-article__body">
        <h1 class="c-title">
            <?php the_title(); ?>
        </h1>

        <div class="c-content">
            <p class="c-content__paragraph">
                <?php the_content(); ?>
            </p>

        </div>
    </div>
    <?php
    endwhile;
    else:
        _e( 'Sorry, no posts matched your criteria.', 'Pollen' );
    endif;
    ?>
</article>



<script src="<?php bloginfo('template_directory'); ?>/vendor/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/vendor/js/propper.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/vendor/js/bootstrap.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/vendor/js/custom.js"></script>
<script>

    document.onreadystatechange = function() {
        if (document.readyState !== "complete") {
            document.querySelector("body").style.visibility = "hidden";
            document.querySelector(".loader").style.visibility = "visible";
        } else {
            document.querySelector(".loader").style.display = "none";
            document.querySelector("body").style.visibility = "visible";
        }
    };

</script>
</body>
</html>


