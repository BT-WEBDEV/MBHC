<?php
/**
 * Template Name: FAQ
 *
 * Description: FAQ
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
        <section id="faq-section" class="bg-tree">
            <div class="container">
                <!--Accordion wrapper-->
                <div class="accordion md-accordion" id="faq" role="tablist" aria-multiselectable="true">
                    <h1 class="text-center text-l-blue">Frequently asked Questions</h1>
                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingOne1">
                            <a data-toggle="collapse" data-parent="#faq" href="#collapseOne1" aria-expanded="true"
                                aria-controls="collapseOne1">
                                <h5 class="mb-0">
                                    Do I need a REALTOR to buy a Hometown Collection home?  <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                            data-parent="#faq">
                            <div class="card-body">
                            We help you throughout the process. You do not need a REALTOR to build a Hometown Collection home. If you are still looking for land, we know REALTORS who are familiar with the area and can offer unique and specific guidance that can be extremely helpful to your purchase.
                            </div>
                        </div>

                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingTwo2">
                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#collapseTwo2"
                                aria-expanded="false" aria-controls="collapseTwo2">
                                <h5 class="mb-0">
                                    How long does it take to build a Hometown Collection home? <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
                            data-parent="#faq">
                            <div class="card-body">
                                We tell people to anticipate 9-10 months. This includes one month to pick the lot, the house type and the selections for your home. One month to create a unique set of architectural plans for your new home and about two months for the County or City to issue a building permit. Construction time is about 5-6 months. This time can vary depending on the time to make selections, the time for the County to issue the building permit and supply chain delays.
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingThree3">
                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#collapseThree3"
                                aria-expanded="false" aria-controls="collapseThree3">
                                <h5 class="mb-0">
                                    How much money do I need for a down payment on a Hometown Collection Home? <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
                            data-parent="#faq">
                            <div class="card-body">
                            We require a deposit equal to Five (5%) of the total cost of construction, including options. The cost would include the lot if we own the lot. When using a construction to permanent loan, some lenders will require that you increase that amount to 10% or even 20% of the total cost at the time of lot settlement or start of construction. Your lender can help you determine exactly what will be required. 
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingFour4">
                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#collapseFour4"
                                aria-expanded="false" aria-controls="collapseFour4">
                                <h5 class="mb-0">
                                    Where do you build? <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseFour4" class="collapse" role="tabpanel" aria-labelledby="headingFour4"
                            data-parent="#faq">
                            <div class="card-body">
                                We currently can build the Hometown Collection in the following Counties in Maryland:  Frederick County, Montgomery County, Howard County, Carroll County, Southern Baltimore County, Prince Georges County and Anne Arundel County. 
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingFive5">
                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#collapseFive5"
                                aria-expanded="false" aria-controls="collapseFive5">
                                <h5 class="mb-0">
                                    Does Hometown Collection build Custom Homes? <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseFive5" class="collapse" role="tabpanel" aria-labelledby="headingFive5"
                            data-parent="#faq">
                            <div class="card-body">
                                We do not build completely custom plans, but we can do a limited amount of custom quotes for certain options. If these are structural changes that we will consider building, there will usually be an architectural design fee that is required to be paid before the revisions to the plan are made.
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingSix6">
                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#collapseSix6"
                                aria-expanded="false" aria-controls="collapseSix6">
                                <h5 class="mb-0">
                                    What type of Warranty do you offer? <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseSix6" class="collapse" role="tabpanel" aria-labelledby="headingSix6"
                            data-parent="#faq">
                            <div class="card-body">
                                Your home will be registered for a Ten-Year Limited Warranty Coverage with a 3rd Party, 2-10 Warranty. A printed booklet or electronic version of the booklet will be part of your Contract and fully explains the terms of the warranty coverage throughout the ten year period, which commences when you take possession of your new home. We will also come back 60-days after you move in and at one year to take care of other items. 
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingSeven7">
                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#collapseSeven7"
                                aria-expanded="false" aria-controls="collapseSeven7">
                                <h5 class="mb-0">
                                    Am I allowed to make changes during the construction process?  <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseSeven7" class="collapse" role="tabpanel" aria-labelledby="headingSeven7"
                            data-parent="#faq">
                            <div class="card-body">
                                Your experience during construction and our ability to stay on schedule is greatly enhanced if selections are made prior to starting construction. We can consider minor changes, but many of the items in the house are ordered when we submit for building permit because of the lead time to obtain certain items. Items may not be installed in the house, but it is likely once construction starts, it has been ordered. We do have a pre-construction meeting to go over the plans and all of your selections to make sure everything is correct. We also have a pre-drywall inspection where you will be able to make decisions about low voltage wiring and if you want more than the standard package. We also can make a limited number of changes to the locations of electrical items at that time. 
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingEight8">
                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#collapseEight8"
                                aria-expanded="false" aria-controls="collapseEight8">
                                <h5 class="mb-0">
                                    How do I make my selections? <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseEight8" class="collapse" role="tabpanel" aria-labelledby="headingEight8"
                            data-parent="#faq">
                            <div class="card-body">
                                We have an extensive design center in Frederick, Maryland where you will be able to see many of the finish items that will go into the house. We also will be able to pull up other items on a screen from our system for you to see. If you are not in the area, we can also do the selections by way of a zoom call. Your Salesperson will guide you through the process. This process usually takes 2-2.5 hours.
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingNine9">
                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#collapseNine9"
                                aria-expanded="false" aria-controls="collapseNine9">
                                <h5 class="mb-0">
                                    How much does it cost to build a Hometown Collection home on a lot outside of one of our projects?  <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseNine9" class="collapse" role="tabpanel" aria-labelledby="headingNine9"
                            data-parent="#faq">
                            <div class="card-body">
                                There are three (3) components of a house price: the price of the land itself, the Lot Construction Budget and the cost of the house. The base price of a house without the lot is advertised on our website. The Lot Construction budget is made up of items such as clearing trees, grading, sediment control, stormwater management, driveway, impact fees and other items that are influenced by the lot. The characteristics of the lot itself will determine the Lot Construction Budget. Because of our experience developing lots, we will help you through the process of determining an estimate for the Lot Construction Budget and then managing that just as we do the house construction process.
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingTen10">
                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#collapseTen10"
                                aria-expanded="false" aria-controls="collapseTen10">
                                <h5 class="mb-0">
                                    Do you work with REALTORS and what’s your commission structure?   <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseTen10" class="collapse" role="tabpanel" aria-labelledby="headingTen10"
                            data-parent="#faq">
                            <div class="card-body">
                                We have always worked with REALTORS. In most cases we will pay Two (2%) of the base house cost. However, this can vary and different projects and the policy is subject to change. 
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <!-- Accordion card -->
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="headingEleven11">
                            <a class="collapsed" data-toggle="collapse" data-parent="#faq" href="#collapseEleven11"
                                aria-expanded="false" aria-controls="collapseEleven11">
                                <h5 class="mb-0">
                                    As a REALTOR how should I register my client with Hometown Collection? <i class="fas fa-angle-down rotate-icon"></i>
                                </h5>
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapseEleven11" class="collapse" role="tabpanel" aria-labelledby="headingEleven11"
                            data-parent="#faq">
                            <div class="card-body">
                                You can fill out the Contact Us form or directly call Marty Mitchell. If you do not make the initial contact, your client will need to let us know they are working with a REALTOR and their initial contact. 
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                </div>
                <!-- Accordion wrapper -->
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