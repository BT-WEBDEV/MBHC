<?php
/**
 * Template Name: Contact Us
 *
 * Description: Contact Us
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
        <div class="gka-two-cols-image-content" style="">
            <div class="container-fluid custom-container" style="">
                <div class="row justify-content-center">
                    <div class="col-lg-7 custom-col d-flex image-wrap order-md-2 right-col" style="">
                        <div class="google-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3095.3393215754577!2d-77.24439939999999!3d39.1215093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b62d83a43bd0a1%3A0xff3128b82ea4dcbc!2s406%20Tschiffely%20Square%20Rd%2C%20Gaithersburg%2C%20MD%2020878!5e0!3m2!1sen!2sus!4v1647555320398!5m2!1sen!2sus"
                                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-5 custom-col d-flex content-wrap order-md-1 left-col" style="">
                        <div class="content w-100 align-self-center">
                            <h1 style="text-align: center;">Headquarters</h1>
                            <div class="text-center">
                                <h5>ADDRESS</h5>
                                <a href="https://goo.gl/maps/3H2fLC8Eb6aoND5z8">
                                    406 Tschiffely Square Road <br>
                                    Gaithersburg, MD 20878
                                </a>
                                <h5 class="mt-4">PHONE</h5>
                                <a href="tel:13013705304">301.370.5304</a>
                            </div>

                            <div class="btn-container d-flex d-wrap justify-content-center text-center">
                                <div class="btn-wrap">
                                    <a href="https://goo.gl/maps/3H2fLC8Eb6aoND5z8" class="btn custom-btn waves-effect waves-light">
                                        DIRECTION </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

        <!-- #Additional Content -->

    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();