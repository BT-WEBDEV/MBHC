<div class="gka-theme-slider-v3 gka-theme-slider-base flex-center">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-5 col-image">
                <!-- Swiper -->
                <div class="swiper gka-theme-swiper-container" aria-label="carousel">
                    <div class="swiper-wrapper" aria-label="carousel">
                        <?php foreach ($slider as $key => $image) { ?>
                        <div class="swiper-slide" aria-label="carousel">
                            <div class="image z-depth-1-half">
                                <img src="<?php echo $image->path, $image->filename; ?>"
                                    alt="<?php echo $image->alttext; ?>" class="img-fluid w-100 img-fit"
                                    aria-label="carousel">
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
                            <span class="active">1</span><span>/<?php echo sizeof($slider) ?></span>
                        </div>

                        <div class="swiper-button-next">
                            <img src="<?php echo get_template_directory_uri()."/images/icons/next.svg" ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="swiper gka-theme-swiper-container" aria-label="carousel">
                    <div class="swiper-wrapper" aria-label="carousel">
                        <?php foreach ($slider as $key => $image) { ?>
                        <div class="swiper-slide" aria-label="carousel">
                            <div class="slider-caption">
                                <h1>Testimonials</h1>
                                <div class="desc">
                                    <p>When it comes to building your dream home, 
                                        it’s about so much more than delivering a beautiful finished product. 
                                        We are passionate about creating an experience 
                                        that brings joy and comfort to your new home journey. 
                                        See what our happy homeowners are saying!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img id="scroll" src="<?php echo get_template_directory_uri()."/images/icons/scroll.svg" ?>" alt="">
</div>