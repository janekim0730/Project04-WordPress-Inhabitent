<?php
/**
 * Template Name: Header Template
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/font-awesome/css/font-awesome.min.css">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="container">
					<div class="site-branding">
						<div class="logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1 class="site-title"><?php bloginfo( 'name' ); ?></h1></a>
						</div>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
						<div class="menu-main-navigation">

							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?>
							</button>
							<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

							<div class="header-search">
							<?php get_search_form(); ?>
							</div>

						</div>
					</nav><!-- #site-navigation -->
				</div>
			</header><!-- #masthead -->
