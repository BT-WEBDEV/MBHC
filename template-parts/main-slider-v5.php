<div class="gka-theme-slider-v5 gka-theme-slider-base flex-center">
    <div class="container-fluid">
        <!-- Swiper -->
        <div class="swiper gka-theme-listing-swiper-container" aria-label="carousel">
            <div class="swiper-wrapper" aria-label="carousel">
                <?php foreach ($slider as $key => $image) { ?>
                <div class="swiper-slide" aria-label="carousel">
                    <div class="image z-depth-1-half">
                        <img src="<?php echo $image->path, $image->filename; ?>" alt="<?php echo $image->alttext; ?>"
                            class="img-fluid w-100" aria-label="carousel">
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
                <div class="pagination swiper-pagination">
                    <span class="active">1</span><span>/<?php echo sizeof($slider) ?></span>
                </div>

                <div class="swiper-button-next">
                    <img src="<?php echo get_template_directory_uri()."/images/icons/next.svg" ?>" alt="">
                </div>
            </div>
        </div>
        <div thumbsSlider="" class="swiper thumbsSlider">
            <div class="swiper-wrapper">
                <?php foreach ($slider as $key => $image) { ?>
                <div class="swiper-slide">
                    <img src="<?php echo $image->path, $image->filename; ?>" alt="<?php echo $image->alttext; ?>"
                        class="img-fluid w-100 img-fit" aria-label="carousel">
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>