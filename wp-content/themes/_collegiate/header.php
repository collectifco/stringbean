<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _Collegiate
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('url'); ?>/wp-content/assets/favicon.ico">
<link rel="shortcut icon" type="image/ico" href="<?php bloginfo('url'); ?>/wp-content/assets/favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php bloginfo('url'); ?>/wp-content/assets/iOSicon.png">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<!--<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>-->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<a href="<?php echo home_url(); ?>">
				<img class="site-logo" src="<?php bloginfo('url'); ?>/wp-content/assets/crest.svg"/></a>
			<h1 class="menu-toggle">
				<?php _e( '☰ <img id="mobile-menu-logo" src="http://f.cl.ly/items/3r1G3z2q3H3L0L1X3s0k/wordmark-01.svg">', '_collegiate' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_collegiate' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->


<div id="featured-image"><?php the_post_thumbnail('large'); ?></div>

	<div id="content" class="site-content">
