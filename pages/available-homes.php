<?php
/**
 * Template Name: Available Homes
 *
 * Description: Available Homes
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
		<section class="listings-section">
            <div class="container-fluid listing-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mb-0">Available Listings</h1>
                    <div class="d-flex flex-wrap">
                        <div class="filter">
                            <select id="ah-price-filter" class="mdb-select browser-default custom-select ah-price-filter">
                                <option selected>PRICE RANGE</option>
                                <option value="all">All</option>
                                <option value="<500">Up to 500K</option>
                                <option value="500-600">500K-600K</option>
                                <option value="600<">600K Above</option>
                            </select>
                        </div>
                        <div class="filter">
                            <select id="ah-beds-filter" class="mdb-select browser-default custom-select ah-beds-filter">
                                <option selected>BEDS</option>
                                <option value="all">All</option>
                                <option value="<4">Up to 4</option>
                                <option value="4-5">4-5</option>
                                <option value="5<">5 Above</option>
                            </select>
                        </div>
                        <div class="filter">
                            <select id="ah-baths-filter" class="mdb-select browser-default custom-select ah-baths-filter">
                                <option selected>BATHS</option>
                                <option value="all">All</option>
                                <option value="<3">Up to 3</option>
                                <option value="3-4">3-4</option>
                                <option value="4<">4 Above</option>
                            </select>
                        </div>
                        <div class="filter">
                            <select id="ah-sqft-filter" class="mdb-select browser-default custom-select ah-sqft-filter">
                                <option selected>SQUARE FEET</option>
                                <option value="all">All</option>
                                <option value="<2000">Up to 2000</option>
                                <option value="2000-4000">2000-4000</option>
                                <option value="4000<">4000 Above</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid listing-container">
                <div id="ah-filter-wrap" class="row">
                    <?php 

                    function pagination_bar( $custom_query ) {

                        $total_pages = $custom_query->max_num_pages;
                        $big = 999999999; // need an unlikely integer

                        if ($total_pages > 1){
                            $current_page = max(1, get_query_var('paged'));

                            echo paginate_links(array(
                                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                'format' => '?paged=%#%',
                                'current' => $current_page,
                                'total' => $total_pages,
                                'prev_text' => '<span><img class="left" src="'.get_template_directory_uri().'/images/icons/chevron-left.svg" alt="Prev Page"></span>',
                                'next_text' => '<span><img class="right" src="'.get_template_directory_uri().'/images/icons/chevron-right.svg" alt="Next Page"></span>'
                            ));
                        }
                    }

                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                    $args = array(  
                        'post_type' => 'mbhc_availablehomes',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => 6
                    ); 

                    $availablehomes = new WP_Query($args);

                    while ( $availablehomes->have_posts() ) : $availablehomes->the_post(); ?>
                    <div id="<?php echo get_field("ah_id") ?>" class="col-lg-4 listing-wrapper" data-price="<?php echo get_field("ah_price") ?>" data-beds="<?php echo get_field("ah_beds") ?>" data-baths="<?php echo get_field("ah_baths") ?>" data-sqft="<?php echo get_field("ah_sqft") ?>" >
                        <div class="fp-list-v1">
                            <div class="image">
                                <a href="<?php the_permalink()?>">
                                    <img src="<?php echo (get_the_post_thumbnail_url($post->ID, 'large')) ? : get_template_directory_uri()."/images/placeholder.jpg"; ?>"
                                        alt="<?php the_title(); ?>" class="img-fluid img-fit w-100">
                                </a>
                            </div>
                            <div class="content">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <a href="<?php the_permalink()?>">
                                            <h6><?php the_title(); ?></h6>
                                        </a>
                                        <div class="specs">
                                            <?php echo (get_field("ah_beds") ? get_field("ah_beds") . " Beds" : "-- Beds" ) ?>
                                            |
                                            <?php echo (get_field("ah_baths") ? get_field("ah_baths") . " Baths" : "-- Baths" ) ?>
                                            |
                                            <?php echo (get_field("ah_sqft") ? get_field("ah_sqft") . " SqFt" : "-- SqFt" ) ?>
                                        </div>
                                    </div>
                                    <div>
                                        <a class="link" href="<?php the_permalink()?>">
                                            VIEW <img
                                                src="<?php echo get_template_directory_uri()."/images/icons/btn-arrow.svg" ?>"
                                                alt="View">
                                        </a>
                                    </div>
                                </div>
                                <div class="price">
                                    <?php echo get_field("ah_headline") ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>

                <div class="row">
                    <div class="col-12">
                        <nav id="listing-pagination" class="pagination justify-content-center align-items-center">
                            <h1 class="outline">Pagination</h1>
                            <?php pagination_bar( $availablehomes ); ?>
                        </nav>
                    </div>
                </div>

                <div id="noResult" class="w-100 text-center" style="display:none;">
                    <p class="font-weight-bold">There are no Floor Plans available.</p>
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
		<!-- #Additional Content -->

	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();