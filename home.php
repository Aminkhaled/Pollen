<!DOCTYPE html>
<html lang="en">
<head>

    <title><?php bloginfo( 'name' ); ?> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/vendor/css/style.css">
</head>
<body>
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
<nav class="navbar navbar-expand-lg  navbar-light ">
    <a class="navbar-brand" href="<?php echo esc_url(home_url());?>">
        <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id,'full');
        if ( has_custom_logo() ) {
            echo '<img src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '">';
        } else {
            echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
        }
        ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php
    wp_nav_menu( array(
        'theme_location'    => 'primary_pollen',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse justify-content-lg-around ',
        'container_id'      => 'navbarNav',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
    ) );
    ?>
</nav>
<!-- end of Navigation -->

    <section class="posts">
        <div class="container">
            <div class="content">

                <ul>
                    <li class="current" id="all">All</li>
                    <?php
                    $args = array(
                        'type'                     => 'post', /* custom post type name */
                        'parent'                   => '',
                        'orderby'                  => 'id',
                        'order'                    => 'ASC',
                        'hide_empty'               => 1,
                        'hierarchical'             => 1,
                        'taxonomy'                 => 'category'  /* custom post type texonomy name */
                    );
                    $cats = get_categories($args);
                    foreach ($cats as $cat) {
                        $cat_id= $cat->term_id;
                        $cat_name= $cat->name; ?>
                        <li id="<?php echo  $cat->name ?>"> <?php echo $cat->name ?></li>
                    <?php  } ?>




                </ul>
                <div id="filter">
                    <?php
                    if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                    ?>
                       <?php
                        $post_id = get_the_ID(); // or use the post id if you already have it
                        $category_object = get_the_category($post_id);
                        $category_name = $category_object[0]->name;
                        ?>
                    <div class="item" data-food="<?php echo $category_name ?>">
                        <div class="item-img">
                            <a href="<?php echo get_permalink($post->ID); ?>">
                                <?php echo the_post_thumbnail('posts_images'); ?>
                            </a>
                        </div>
                        <div>
                          <a href="<?php echo get_permalink($post->ID) ?>">  <h3><?php echo the_title();?></h3></a>
                            <a href="<?php echo get_permalink($post->ID) ?>">
                                <p>
                                    <?php excerpt(20);?>
                                </p>
                            </a>
                        </div>
                    </div>

<?php
endwhile;
endif;
?>

                </div>
            </div>
        </div>
    </section>

<footer class="footer-section">
    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fa fa-map-marker"></i>
                        <div class="cta-text">
                            <h4>Find us</h4>
                            <span>Maadi</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fa fa-phone"></i>
                        <div class="cta-text">
                            <h4>Call us</h4>
                            <span>+201153496372</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fa fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>Mail us</h4>
                            <span>mail@info.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="#" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                elit,Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            <a href="#"><i class="fa fa-facebook facebook-bg"></i></a>
                            <a href="#"><i class="fa fa-twitter twitter-bg"></i></a>
                            <a href="#"><i class="fa fa-google-plus google-bg"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">about</a></li>
                            <li><a href="#">services</a></li>
                            <li><a href="#">portfolio</a></li>
                            <li><a href="#">Contact</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Email Address">
                                <button><i class="fa fa-telegram"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2020, All Right Reserved <a href="https://github.com/Aminkhaled">AmenKhaled</a></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">about</a></li>
                            <li><a href="#">services</a></li>
                            <li><a href="#">portfolio</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php bloginfo('template_directory'); ?>/vendor/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/vendor/js/propper.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/vendor/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/vendor/js/script.js"></script>

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