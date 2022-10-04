<?php
/**
 * Template Name: Our Process
 *
 * Description: Our Process
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
        <section class="page-list-section bg-center">
            <div class="container-fluid">
                <div class="px-default page-list-wrap">
                    <div class="row align-items-stretch">
                        <div class="col-lg-4">
                            <div class="text-center page-list d-flex flex-column justify-content-between">
                                <div class="content testimonials">
                                    <h1>Testimonials</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                                        nibh
                                        euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                                        enim ad
                                        minim veniam, quis nostrud exerci tation ull. …</p>
                                    <div class="name">Frank Lloyd Wright</div>
                                </div>
                                <a href="/testimonials/" class="link">Explore <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="text-center page-list d-flex flex-column justify-content-between">
                                <div class="content">
                                    <h1>Portfolio</h1>
                                    <p>Our picture perfect home designs are carefully crafted to exceed every expectation. 
                                        We hold ourselves to a higher standard of affordable, 
                                        new home luxury with impressive layouts, high-end finishes, 
                                        and sophisticated appeal - both inside and out. 
                                        Explore our portfolio of designs to see for&nbsp;yourself! </p>
                                </div>
                                <a href="/about-us/" class="link">Explore <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="text-center page-list d-flex flex-column justify-content-between">
                                <div class="content">
                                    <h1>FAQ</h1>
                                    <p>We know the experience of new home building is as exciting as it is intimidating. 
                                        Don’t fret! Our years of experience as a home builder 
                                        in Maryland coupled with our dedication to customer satisfaction means we have the answers or 
                                        the ability to find the answers to all your questions.</p>
                                </div>
                                <a href="/faq/" class="link">Explore <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
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
        <?php get_template_part( 'template-parts/special-features' ); ?>
        <!-- #Additional Content -->

    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();