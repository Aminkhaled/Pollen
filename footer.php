<footer class="footer-section">
    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fa fa-map-marker"></i>
                        <div class="cta-text">
                            <h4>Find us</h4>
                            <span>
                                114 El Haram St, Beside El Haram Hospital,
                                First Floor Apartment 111, Giza, Egypt
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fa fa-phone"></i>
                        <div class="cta-text">
                            <h4>Call us</h4>
                            <span>+201100268782</span>
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
                            <a href="<?php echo esc_url(home_url());?>">
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
                        </div>
                        <div class="footer-text">
                            <p> We aim to produce natural preparations from plants pollen using advanced scientific techniques. These preparations have no sideeffects as chemical medicine </p>
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
                        <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'footer_pollen',
                            'depth'             => 2,
                            'menu_class'        => '',

                        ) );
                        ?>
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
                               <?php echo do_shortcode('[wpforms id="41"]')?>
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
                        <p>Copyright &copy; 2020, All Right Reserved <a href="#">ActivePollen</a></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
<!--             -->
                        <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'footer_pollen',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'footer-menu ',
                            'container_id'      => '',
                            'menu_class'        => '',


                        ) );
                        ?>

                </div>
            </div>
        </div>
    </div>
</footer>
<script src="<?php bloginfo('template_directory'); ?>/vendor/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/vendor/js/propper.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/vendor/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/vendor/js/jquery.ripples-min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/vendor/js/gallery.js"></script>
<script src="https://md-aqil.github.io/images/swiper.min.js"></script>
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
<?php wp_footer(); ?>
</body>
</html>