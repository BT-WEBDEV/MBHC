<div class="portfolio-section">
    <div class="container-fluid portfolio-header">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mb-0">Portfolio</h1>
            <div class="d-flex flex-wrap align-items-center">
                <div style="color: #636369;" class="font-weight-bold">
                    SORT BY
                </div>
                <div class="filter">
                    <select class="browser-default custom-select">
                        <option selected>ALL HOME MODELS</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div></div>
        </div>
    </div>

    <div class="container-fluid portfolio-container">
        <div class="row">
            <?php for ($i=0; $i < 6; $i++) { ?>
            <div class="col-lg-4">
                <div class="portfolio-item">
                    <div class="image">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri(  )."/images/home.jpg" ?> " alt=""
                                class="img-fluid img-fit">
                        </a>
                    </div>
                    <div class="content">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <a class="text-white" href="">
                                    <h6>LOREM IPSUM DOLOR</h6>
                                </a>
                            </div>
                            <div>
                                <a class="link" href="">VIEW <img
                                        src="<?php echo get_template_directory_uri()."/images/icons/btn-arrow.svg" ?>"
                                        alt="View"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>