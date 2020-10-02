<?php
get_header();
?>
<!--Carousel Wrapper-->
<div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
        <li data-target="#video-carousel-example2" data-slide-to="1"></li>
        <li data-target="#video-carousel-example2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!-- First slide -->
        <div class="carousel-item video-item active">
            <!--Mask color-->

            <video  autoplay loop muted>
                <source src="<?php bloginfo('template_directory'); ?>/vendor/img/video-bg.mp4" type="video/mp4">
            </video>


            <div class="overlay">
                <!--Caption-->
                <div class="carousel-caption d-none d-md-block">
                    <h2 class="h3-responsive" >Power of The Nature</h2>
                    <p class="lead" >
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aliquam interdum in tortor sit amet efficitur. In at venenatis massa.
                        Donec commodo dictum malesuada. Ut hendrerit dui quis lorem fermentum pretium.
                    </p>

                </div>
                <!--Caption-->
            </div>
        </div>
        <!-- /.First slide -->

        <!-- Third slide -->
        <div class="carousel-item item-2" >
            <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Skin caring</h2>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Aliquam interdum in tortor sit amet efficitur. In at venenatis massa.
                    Donec commodo dictum malesuada. Ut hendrerit dui quis lorem fermentum pretium.
                </p>
            </div>
        </div>
        <!-- /.Third slide -->

        <!-- Third slide -->
        <div class="carousel-item item-3" >
            <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4">Skin caring</h2>
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Aliquam interdum in tortor sit amet efficitur. In at venenatis massa.
                    Donec commodo dictum malesuada. Ut hendrerit dui quis lorem fermentum pretium.
                </p>
            </div>
        </div>
        <!-- /.Third slide -->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--Carousel Wrapper-->

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="about-caption">
                    <h1>The power of Nature</h1>
                    <p>
                        We aim to produce natural preparations from plants pollen using advanced scientific techniques.
                        These preparations have no sideeffects as chemical medicine

                    </p>
                    <a href="<?php echo get_permalink(get_page_by_path('about-us'));?>">About us </a>
                </div>
            </div>
            <!--        col-->
            <div class="col-md-6 col-sm-12">
                <div class="about-img">
                    <img src="<?php bloginfo('template_directory'); ?>/vendor/img/nature.png" alt="nature">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery">
    <h2 class="text-center">The perfection of Nature</h2>
    <div class="carousel-gallery">
        <figure>
            <img src="<?php bloginfo('template_directory'); ?>/vendor/img/gallery/gallery-1.jpg" alt="">
            <img src="<?php bloginfo('template_directory'); ?>/vendor/img/gallery/gallery-2.jpg" alt="">
            <img src="<?php bloginfo('template_directory'); ?>/vendor/img/gallery/gallery-3.jpg" alt="">
            <img src="<?php bloginfo('template_directory'); ?>/vendor/img/gallery/gallery-4.jpg" alt="">
            <img src="<?php bloginfo('template_directory'); ?>/vendor/img/gallery/gallery-5.jpg" alt="">
            <img src="<?php bloginfo('template_directory'); ?>/vendor/img/gallery/gallery-6.jpg" alt="">
            <img src="<?php bloginfo('template_directory'); ?>/vendor/img/gallery/gallery-7.jpg" alt="">
            <img src="<?php bloginfo('template_directory'); ?>/vendor/img/gallery/gallery-8.jpg" alt="">
        </figure>
        <nav>
            <button class="nav prev"><i class="fa fa-angle-left"></i></button>
            <button class="nav next"><i class="fa fa-angle-right"></i></button>
        </nav>
    </div>
</section>

<section class="spacer">

    <div class="testimonial-section">
        <div class="testi-user-img">
            <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="u3" src="https://md-aqil.github.io/images/2091127763_1_1_1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="u1" src="https://md-aqil.github.io/images/beautiful-beauty-face-2657838.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img class="u2" src="https://md-aqil.github.io/images/attractive-beautiful-beauty-1986684.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                        <img class="u4" src="https://md-aqil.github.io/images/beautiful-beauty-face-2657838.jpg" alt="">
                    </div>

                </div>
            </div>
        </div>
        <div class="user-saying">
            <div class="swiper-container testimonial">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper ">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="quote">
                            <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">
                            <p>
                                “This is best and biggest unified platform
                                for instant online admission. We can easily
                                take admission for any course in any institute..“
                            </p>
                            <div class="name">-Ramkishor Verma-</div>
                            <div class="designation">University Student</div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="quote">
                            <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">

                            <p>
                                “This is best and biggest unified platform
                                for instant online admission. We can easily
                                take admission for any course in any institute..“
                            </p>
                            <div class="name">-Ramkishor Verma-</div>
                            <div class="designation">University Student</div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="quote">
                            <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">

                            <p>
                                “This is best and biggest unified platform
                                for instant online admission. We can easily
                                take admission for any course in any institute..“
                            </p>
                            <div class="name">-Ramkishor Verma-</div>
                            <div class="designation">University Student</div>

                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="quote">
                            <img class="quote-icon" src="https://md-aqil.github.io/images/quote.png" alt="">

                            <p>
                                “This is best and biggest unified platform
                                for instant online admission. We can easily
                                take admission for any course in any institute..“
                            </p>
                            <div class="name">-Ramkishor Verma-</div>
                            <div class="designation">University Student</div>

                        </div>
                    </div>

                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination swiper-pagination-white"></div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>