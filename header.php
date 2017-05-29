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
		<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" rel="shortcut icon" type="image/ico">
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner" >
		<!-- TODO: position fixed for mobile menu -->
		<div class="title-bar" data-responsive-toggle="mobile-menu">
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img class="site-icon-mobile" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/heart-icon.png" alt="Mark Savage - CPP">
				</a>
			</div>
			
			<div class="title-bar-right"><button class="menu-icon" type="button" data-toggle="mobile-menu"></button></div>
		</div>

		<div id="site-navigation" class="mobile-menu-wrapper top-bar" role="navigation">				
			<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
		</div>
		
		<!-- <div class="site-branding-wrapper"> -->
			<div class="site-branding ">
				
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
				
			</div>			
		<!-- <div> -->
		
	</header>
	
	<div class="main-nav-wrapper">
		<div class="main-nav">
			<ul>
				<li><a data-link="/" href="/">about</a></li>
				<li><a data-link="why-psychotherapy" href="/why-psychotherapy">why psychotherapy</a></li>
				<li><a data-link="mindfulness-psychotherapy" href="/mindfulness-psychotherapy">mindful approach</a></li>
				<li><a data-link="fees" href="/fees">fees</a></li>
				<li><a data-link="contact" href="/contact">contact</a></li>
			</ul>
		</div>
	</div>
	
	<section class="container">


		<?php do_action( 'foundationpress_after_header' );
