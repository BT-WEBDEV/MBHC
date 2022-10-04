<section class="testimonials-sectionv-v2">
    <div class="container">
        <div class="testimonials-wrap">
            <!-- Swiper -->
            <div class="swiper gka-theme-swiper-container" aria-label="carousel">
                <div class="swiper-wrapper" aria-label="carousel">
                    <?php for ($i=0; $i < 4; $i++) { ?>
                    <div class="swiper-slide" aria-label="carousel">
                        <div class="text-center testimonials">
                            <!-- <img class="rounded-circle"
                                src="<?php echo get_template_directory_uri()."/images/placeholder.jpg" ?>" alt=""> -->
                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad
                                minim veniam, quis nostrud exerci tation ullamcorper suscipit. Lorem ipsum dolor
                                sit
                                amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                laoreet dolore magna aliquam erat volutpat.
                            </div>
                            <div class="name">Frank Lloyd Wright</div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <div class="controls">
                    <!-- Navigation -->
                    <div class="swiper-button-prev">
                        <img src="<?php echo get_template_directory_uri()."/images/icons/prev.svg" ?>" alt="">
                    </div>

                    <!-- Pagination -->
                    <div class="pagination">
                        <span class="active text-white">1</span><span class="text-white">/4</span>
                    </div>

                    <div class="swiper-button-next">
                        <img src="<?php echo get_template_directory_uri()."/images/icons/next.svg" ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>