<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Sport
 */

get_header();
?>

	<main id="primary" class="site-main">
		<header class="page-header entry-header" style="background-image:url('/wp-content/uploads/2021/02/hero-banner.jpg')">
			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'sport' ); ?></h1>
		</header><!-- .page-header -->
		<section class="error-404 not-found">
			<div class="container">

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try to find something new?', 'sport' ); ?></p>
			</div><!-- .page-content -->
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
