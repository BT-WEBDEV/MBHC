<?php
/**
 * The template for displaying all Floor Plan page
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
                <div id="price"><?php the_field("mbhc_headline"); ?>*</div>
                <i id="price-disclaimer">*Price does not include land or land development costs.</i>
                <div class="specs d-flex justify-content-center">
                    <?php if(get_field("mbhc_beds")) { ?>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri() . "/images/listings/beds.png" ?>" alt=""
                            class="img-fluid">
                        <div><?php the_field("mbhc_beds"); ?> Bedrooms</div>
                    </div>
                    <?php } ?>
                    <?php if(get_field("mbhc_baths")) { ?>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri() . "/images/listings/baths.png" ?>" alt=""
                            class="img-fluid">
                        <div><?php the_field("mbhc_baths"); ?> Bathrooms</div>
                    </div>
                    <?php } ?>
                    <?php if(get_field("mbhc_sqft")) { ?>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri() . "/images/listings/sqft.png" ?>" alt=""
                            class="img-fluid">
                        <div><?php the_field("mbhc_sqft"); ?> SqFt</div>
                    </div>
                    <?php } ?>
                </div>

                <div class="desc">
                    <?php the_field("mbhc_description"); ?>
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