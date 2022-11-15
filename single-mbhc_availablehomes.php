<?php
/**
 * The template for displaying an Available Home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gka_theme
 */

get_header();
?>
<div id="primary" class="content-area nav-space">
    <main id="main" class="site-main">

        <!-- Main Slider -->
        <section>
            <h1 class="outline">Slider</h1>
            <?php 
			$slider_id = get_field("gka_theme_slider", $post->ID);
			if($slider_id) {
				$slider = gka_theme_get_gallery($slider_id);
				if($slider) { 
					include get_template_directory() . '/template-parts/main-slider-v5.php'; 
				} 
			}
			else {
				include get_template_directory() . '/template-parts/no-slider.php'; 
			}
        ?>
        </section>
        <!-- #Main Slider -->

        <!-- Additional Content -->
        <section class="intro-section">
            <div class="container text-center">
                <h1 class="text-l-blue"><?php the_title(); ?></h1>
                <div id="price"><?php echo get_field("ah_headline")?></div>
                <div class="specs d-flex justify-content-center">
                    <?php if(get_field("ah_beds")) { ?>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri() . "/images/listings/beds.png" ?>" alt=""
                            class="img-fluid">
                        <div><?php the_field("ah_beds"); ?> Bedrooms</div>
                    </div>
                    <?php } ?>
                    <?php if(get_field("ah_baths")) { ?>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri() . "/images/listings/baths.png" ?>" alt=""
                            class="img-fluid">
                        <div><?php the_field("ah_baths"); ?> Bathrooms</div>
                    </div>
                    <?php } ?>
                    <?php if(get_field("ah_sqft")) { ?>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri() . "/images/listings/sqft.png" ?>" alt=""
                            class="img-fluid">
                        <div><?php the_field("ah_sqft"); ?> SqFt</div>
                    </div>
                    <?php } ?>
                </div>

                <div class="desc">
                    <?php the_field("ah_description"); ?>
                </div>

                <div class="specs d-flex justify-content-center" style="gap:20px;"> 
                    <?php if( get_field('ah_pdf_1') ): ?>
                        <a href="<?php the_field('ah_pdf_1'); ?>" target="_blank" class="btn custom-btn waves-effect waves-light">View Floor Plans</a>
                    <?php endif; ?>
                    
                    <?php if( get_field('ah_pdf_2') ): ?>
                        <a href="<?php the_field('ah_pdf_2'); ?>" target="_blank" class="btn custom-btn waves-effect waves-light">View Additional Plans</a>
                    <?php endif; ?>
                </div>

            </div>
        </section>
        <!-- #Additional Content -->

        <!-- Widget Area Before -->
        <?php
		if ( is_active_sidebar( 'gka_theme_widget_before' ) ) {
			dynamic_sidebar( 'gka_theme_widget_before' ); 
		}
		?>
        <!-- #Widget Area Before -->

        <!-- Additional Content -->

        <!-- #Additional Content -->

        <!-- Main Content -->
        <?php while ( have_posts() ) : the_post(); ?>
        <section class="main-section">
            <?php get_template_part( 'template-parts/content', 'page' ); ?>
        </section>
        <?php endwhile; ?>
        <!-- #Main Content -->

        <!-- Additional Content -->
        <div class="gka-two-cols-image-content" style="">
            <div class="container-fluid custom-container" style="">
                <div class="row justify-content-center">
                    <div class="col-lg-7 custom-col d-flex image-wrap order-md-2 right-col" style="">
                        <div class="google-map">
                            <iframe
                                <?php if(get_field("ah_iframesrc")) { ?>
                                src="<?php the_field("ah_iframesrc"); ?>"
                                style="border:0;" allowfullscreen="" loading="lazy">
                                <?php } ?>
                            </iframe>
                        </div>
                    </div>
                    <div class="col-lg-5 custom-col d-flex content-wrap order-md-1 left-col" style="">
                        <div class="content w-100 align-self-center">
                            <h1 style="text-align: center;">Location</h1>
                            <div class="text-center">
                                <h5>ADDRESS</h5>

                                    <?php if(get_field("ah_address")) { ?>
                                        <?php the_field("ah_address"); ?>, 
                                    <?php } ?>
                                    <br> 
                                    <?php if(get_field("ah_city")) { ?>
                                        <?php the_field("ah_city"); ?>, 
                                    <?php } ?>

                                    <?php if(get_field("ah_state")) { ?>
                                        <?php the_field("ah_state"); ?>
                                    <?php } ?>

                                    <?php if(get_field("ah_zip")) { ?>
                                        <?php the_field("ah_zip"); ?>
                                    <?php } ?>

            
                            </div>

                            <div class="btn-container d-flex d-wrap justify-content-center text-center">
                                <div class="btn-wrap">
                                <?php if(get_field("ah_address")) { ?>
                                    <a href="<?php the_field("ah_maps"); ?>" class="btn custom-btn waves-effect waves-light">
                                        DIRECTIONS </a>
                                <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #Additional Content -->

        <!-- Widget Area After -->
        <?php
		if ( is_active_sidebar( 'gka_theme_widget_after' ) ) {
			dynamic_sidebar( 'gka_theme_widget_after' ); 
		}
		?>
        <!-- #Widget Area After -->

        <!-- Additional Content -->
        <?php get_template_part( 'template-parts/contact-form' ); ?>
        <!-- #Additional Content -->

    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();