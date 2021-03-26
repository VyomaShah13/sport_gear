<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sport
 */

?>

<article class="no-results not-found">
	<header class="entry-header" style="background-image:url('/wp-content/uploads/2021/02/hero-banner.jpg')">
		<h1 class="page-title entry-title"><?php esc_html_e( 'No Result Found', 'sport' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content text-center">
		<div class="container">	
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) :

				printf(
					'<p>' . wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'sport' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					) . '</p>',
					esc_url( admin_url( 'post-new.php' ) )
				);

			elseif ( is_search() ) :
			?>
			<h1 class="main-title"><?php esc_html_e( 'No Result', 'sport' ); ?></h1>
			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'sport' ); ?></p>
			<?php

			else :
			?>
			<h1 class="main-title"><?php esc_html_e( 'Search Result', 'sport' ); ?></h1>
			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'sport' ); ?></p>
			<?php

			endif;
			?>
		</div>
	</div><!-- .page-content -->
</article><!-- .no-results -->
