<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>


	<header class="site-header" role="banner">

		<div class="grid-x grid-padding-x">
		  <div class="small-4 cell">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/seghettiwaxler.svg" alt="Seghetti Waxler" /></a>
			</div>
		  <div class="auto cell">
				<nav>
					<?php foundationpress_top_bar_r(); ?>

						<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				</nav>
		  </div>
		</div>

</header>
