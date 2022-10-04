<?php
/**
 * Template Name: Testimonials
 *
 * Description: Testimonials
 *
 * @package WordPress
 * @subpackage REDI
 * @since REDI 1.0
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
					include get_template_directory() . '/template-parts/' . get_field("gka_template", $post->ID) . '.php'; 
				} 
			}
			else {
				include get_template_directory() . '/template-parts/no-slider.php'; 
			}
        ?>
        </section>
        <!-- #Main Slider -->

        <!-- Additional Content -->

        <!-- #Additional Content -->

        <!-- Widget Area Before -->
        <?php
		if ( is_active_sidebar( 'gka_theme_widget_before' ) ) {
			dynamic_sidebar( 'gka_theme_widget_before' ); 
		}
		?>
        <!-- #Widget Area Before -->

        <!-- Additional Content -->
        <section class="bg-tree">
            <div class="container">
                <div class="testimonials-wrap">
                    <!-- Swiper -->
                    <div class="swiper gka-theme-swiper-container" aria-label="carousel">
                        <div class="swiper-wrapper" aria-label="carousel">
                            <?php for ($i=0; $i < 4; $i++) { ?>
                            <div class="swiper-slide" aria-label="carousel">
                                <div class="text-center testimonials">
                                    <img class="rounded-circle" src="<?php echo get_template_directory_uri()."/images/placeholder.jpg" ?>"
                                        alt="">
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
                                <span class="active text-black">1</span><span class="text-black">/4</span>
                            </div>

                            <div class="swiper-button-next">
                                <img src="<?php echo get_template_directory_uri()."/images/icons/next.svg" ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- #Additional Content -->

        <!-- Main Content -->
        <?php while ( have_posts() ) : the_post(); ?>
        <section class="main-section">
            <div class="container">
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
            </div>
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

        <!-- #Additional Content -->

    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();