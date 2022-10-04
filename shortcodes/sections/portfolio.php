<div class="portfolio-section">
    <div class="container-fluid portfolio-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mb-0">Portfolio</h1>
        </div>
    </div>

    <div class="container-fluid portfolio-container">
        <div class="row">
            <?php 
            $theme_img_path = '/images/portfolio/';
            $images = glob( get_template_directory() . $theme_img_path . '*.jpg' );
            foreach ($images as $image) {?>
                    <div class="col-lg-4">
                        <div class="portfolio-item">
                            <div class="image">
                                <img src="<?php echo get_template_directory_uri() . $theme_img_path . basename( $image ); ?> " alt="" class="img-fluid img-fit" data-fancybox="gallery" data-caption="The Becraft">
                            </div>
                        </div>
                    </div>
            <?php } ?> 
        </div>
    </div>
</div>