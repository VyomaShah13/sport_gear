<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sport
 */

?>
	<div class="brand-post">
		<div class="container">
			<div class="row">
				<h1 class="main-title">Latest Brands</h1>
				<?php
					$brand_args = array(
						'post_type' => 'sport_brand',
						'posts_per_page' => 3,
					);
					$brand_query = new WP_Query($brand_args);

					if( $brand_query -> have_posts()){
						while( $brand_query -> have_posts() ){
							
							$brand_query -> the_post();
							?>
							<div class="col-lg-4">
								<div class="brand-img">
									<?php sport_post_thumbnail(); ?>
								</div>
								<h2><?php the_title('<h2 class="brand-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>'); ?></h2>
								<?php the_excerpt(); ?>
								<?php echo '<a href="' . esc_url( get_permalink() ) . '" class="read-more-link">Read more </a>'?> 
							</div>
							<?php
						}
					}
				?>
			</div>
		</div>
	</div>
	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter-text">
						<h4>Newsletter</h4>
						<p>Subscribe our newsletter and  keep update fo new product & Promotion</p>
					</div>
				</div>
				<div class="col-lg-6">
					<form action="post">
						<div class="newsletter-form">
							<input id="newsletter-email" class="input-control has-white-background-color" type="email" placeholder="Your Email Address" required="required" >
							<button id="newsletter-submit" type="submit" class="primary-btn has-primary-background-color has-grayish-black-color" value="Submit">subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<footer id="colophon" class="site-footer has-secondary-background-color has-white-color has-regular-font-size">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="site-info">
						&copy; <?php echo gmdate('Y'); ?> <a href="#">SportGear</a>. All Rights Reserved. 
					</div><!-- .site-info -->
				</div>
				<div class="col-lg-6">
					<div class="social-links">
						
						<ul class="text-right">
							<li><a href="<?php echo esc_url(get_theme_mod('facebook_url')); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="<?php echo esc_url(get_theme_mod('twitter_url')); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="<?php echo esc_url(get_theme_mod('insta_url')); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div><!-- .site-info -->
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
