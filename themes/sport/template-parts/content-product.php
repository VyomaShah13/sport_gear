<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sport
 */

?>

<article class="post-block" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if( !empty(get_the_title())) { ?>	
		<header class="entry-header" style="background-image:url('/wp-content/uploads/2021/02/hero-banner.jpg')">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<?php
			if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
		?>
		</header><!-- .entry-header -->
	<?php } ?>
	<div class="container">	
		<div class="post-detail">
			<div class="entry-content">
				<?php
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sport' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						)
					);

					wp_link_pages(
						array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sport' ),
							'after'  => '</div>',
						)
					);
				?>
			</div><!-- .entry-content -->
		</div>
	
	</div>
</article><!-- #post-<?php the_ID(); ?> -->