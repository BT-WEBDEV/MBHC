<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gka_theme
 */

?>

</div><!-- #content -->

<footer id="footer" class="site-footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-xl-3 cols text-center">
				<div class="flex-center h-100">
					<div>
						<div>
							<img class="logo img-fluid"
								src="<?php echo get_template_directory_uri(). "/images/MBHC-logo-vertical.svg" ?>"
								alt="">
						</div>
						<div class="social">
							<a href="https://www.linkedin.com/company/mitchell-&-best-homebuilders-llc"><i class="fa-brands fa-linkedin"></i></a>
							<a href="https://www.facebook.com/mitchellbesthomes/"><i class="fa-brands fa-facebook"></i></a>
							<a href="https://www.instagram.com/mitchellandbest/?hl=en"><i class="fa-brands fa-instagram"></i></a>
							<a href="https://www.houzz.com/professionals/design-build-firms/mitchell-and-best-homes-pfvwus-pf~185385222"><i class="fa-brands fa-houzz"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-3 cols">
				<div>
					<div>
						<h6 class="font-gotham font-weight-normal">ADDRESS</h6>
						<a href="https://goo.gl/maps/3H2fLC8Eb6aoND5z8">
							406 Tschiffely Square Road<br>
							Gaithersburg, MD 20878
						</a>
					</div>
					<div class="mt-4">
						<h6 class="font-gotham font-weight-normal">CONTACT INFO</h6>
						<a href="tel:13013705304">301.370.5304</a>
					</div>

					<div class="mt-4 pt-2">
						<a href="/privacy-policy/"><u>PRIVACY POLICY</u></a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-3 cols">
				<ul id="footer-menu" class="list-unstyled justify-content-center">
					<?php 
					$footer_nav = wp_get_nav_menu_items(3);
					foreach ($footer_nav as $key => $item) {    				        
					?>
					<li>
						<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="col-md-6 col-xl-3 cols text-center">
				<div class="flex-center h-100">
					<div class="text-blue">
						<h4>EXCEEDING</h4>
						<h4>EXPECTATIONS,</h4>
						<h4>NOT BUDGETS</h4>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="disclaimer">© <?php echo getdate()['year']; ?> Hometown collection by Mitchell & Best. All rights
			reserved.</div>
	</div>
</footer>

<div id="gdpr-cookies" class="z-depth-2 d-none">
	<div>
		<h6 class="font-weight-medium">This website uses cookies</h6>
		<p>
			This site uses cookies to provide more personalized content, social media features, and ads, and to analyze
			our
			traffic. We might share information about your use of our site with our social media, advertising, and
			analytics
			partners who may combine it with other information that you’ve provided to them or that they’ve collected
			from
			your use of their services. We will never sell your information or share it with unaffiliated entities.
		</p>
	</div>
	<div>
		<button id="gdpr-button" class="btn custom-btn btn-blue">Accept</button>
	</div>
</div>

</div><!-- #page -->
<?php wp_footer(); ?>
<!-- Plugins -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</body>

</html>