<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sport
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sport' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="top-nav">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="top-nav-left">
							<a href="#">
								<i class="fa fa-envelope"></i> info@sportgear.com
							</a>
						</div>
					</div>
					<div class="col-md-8 text-center">
						<div class="top-nav-center">Free Shipping on All orders Over $50!</div>
					</div>
					<div class="col-md-2">
						<div class="top-nav-right">
							<ul class="top-nav-menu">
								<li class="account">
									<a href="#">
									My Account <i class="fa fa-angle-down"></i>
									</a>
									<ul class="account-selection">
										<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
										<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
										<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>My Favourite</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>	
			</div>	
		</div>
	<div class="container">
		<div class="row">
			<div class="col-4">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$sport_description = get_bloginfo( 'description', 'display' );
					if ( $sport_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $sport_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
			</div>
			<div class="col-8">
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sport' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-primary',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>
  		</div>

		
	</header><!-- #masthead -->
