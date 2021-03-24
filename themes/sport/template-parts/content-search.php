<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sport
 */

?>

<article class="post-block" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">	
		<div class="post-img">
			<?php sport_post_thumbnail(); ?>
		</div>
		<div class="post-detail">
			<div class="entry-content">
					<?php if( !empty(get_the_title())) { ?>
						<div class="entry-header">
							<?php
								if ( is_singular() ) :
									the_title( '<h1 class="entry-title">', '</h1>' );
								else :
									the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
								endif;

								if ( 'post' === get_post_type() ) :
									?>
							<?php endif; ?>
						</div>
					<?php } ?>
					<?php
						the_excerpt();
						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sport' ),
								'after'  => '</div>',
							)
						);
					?>
					<div class="entry-footer">
						<?php sport_entry_footer(); ?>
					</div><!-- .entry-footer -->	
			</div><!-- .entry-content -->
		</div>
	
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
