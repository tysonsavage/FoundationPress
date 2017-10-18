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
		<!-- <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" rel="shortcut icon" type="image/ico"> -->
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
		
		<div class="site-branding-wrapper">

			<div class="site-logo">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="81" height="88" viewBox="0 0 234 256">
					  <defs>
					    <path id="a" d="M129.71 255c48.197 0 79.733-34.8 85.383-85.1 5.003-44.532-10.313-79.483-55.388-82.81-2.204-.162-14.963-1.23-32.087 11.452-.5.37 1.698.487-2.3 0-6.243-8.046-18.836-11.45-25.762-11.45-45.558 0-60.095 37.93-55.854 82.81C48.096 216.404 81.516 255 129.712 255z"/>
					  </defs>
					  <g fill="none" fill-rule="evenodd" transform="translate(-8)">
					    <g fill="#F2F2F2" stroke="#000">
					      <path d="M200.878 71.405c8.26 4.21 18.693.29 23.3-8.752 1.987-3.898 1.592-11.048-.93-18.148-2.635-7.417-.888-15.26-.888-15.26s-5.418 5.51-12.835 7.85c-8.18 2.58-13.23 6.327-15.262 10.315-4.608 9.043-1.646 19.786 6.615 23.995zM127.568 65.3c14.577 0 26.395-11.354 26.395-25.36 0-6.037-5.657-14.58-14.258-21.73C130.718 10.74 127.568 0 127.568 0s-3.656 10.17-12.377 17.694c-9.618 8.3-14.017 16.07-14.017 22.246 0 14.006 11.817 25.36 26.395 25.36z"/>
					      <path d="M172.917 64.44c11.712 1.44 22.484-7.79 24.058-20.61.68-5.528-2.906-13.907-9.013-21.3-6.38-7.725-7.705-17.868-7.705-17.868s-4.08 8.95-11.934 14.977c-8.66 6.648-13.07 13.326-13.764 18.982-1.575 12.82 6.644 24.38 18.357 25.82zM56.71 72.712c8.028-4.636 10.424-15.52 5.35-24.31-2.19-3.788-8.4-7.35-15.728-9.102-7.656-1.83-13.283-7.568-13.283-7.568s1.67 7.545-.407 15.04c-2.29 8.267-1.9 14.542.34 18.42 5.074 8.788 15.696 12.155 23.726 7.52z"/>
					      <path d="M37.572 87.604c4.56-5.63 3.26-14.24-2.903-19.23-2.658-2.15-8.186-3.01-14.023-2.237-6.097.81-11.808-1.8-11.808-1.8s3.33 5.035 3.914 11.084c.644 6.673 2.687 11.14 5.405 13.342 6.162 4.99 14.854 4.472 19.412-1.158zM218.417 91.28c5.708 4.46 14.294 3.01 19.176-3.238 2.104-2.694 2.868-8.236 1.992-14.058-.916-6.082 1.594-11.838 1.594-11.838s-4.978 3.42-11.015 4.108c-6.66.76-11.09 2.88-13.245 5.637-4.882 6.25-4.212 14.93 1.497 19.39zM84.7 63.756c11.5-2.655 18.465-15.01 15.56-27.597-1.253-5.427-7.487-12.075-15.756-16.934-8.638-5.076-13.35-14.154-13.35-14.154s-.775 9.805-6.092 18.155c-5.866 9.21-7.723 16.994-6.442 22.545C61.526 58.36 73.203 66.41 84.7 63.756z"/>
					    </g>
					    <path fill="#FFF" stroke="#000" d="M128.623 255c51.758 0 88.614-37.452 103.824-88.782 11.062-29.396 18.91-120.656-70.716-116.05-2.366-.175-32.794 7.73-45.856 26-1.813 2.537 4.845-6.312 4.845-6.312s-.377-2.566-2.878-5.102C111.14 56.098 97.73 52.07 84.726 52.07c-76.678 0-69.16 79.208-60.426 114.148C33.586 205.598 76.864 255 128.623 255z"/>
					    <path fill="#FFFCFC" fill-opacity=".7" stroke="#000" d="M127.787 255c51.732 0 84.43-39.87 97.4-84.01 10.75-40.004 1.447-109.31-62.747-102.527-2.365-.175-26.27 3.31-36.05 15.612-.19.24 2.75 1.428 6.916 9.675 0 0 0-3.315-6.915-9.675-9.637-7.44-29.386-11.26-30.796-11.437-71.055-8.847-72.91 63.098-65.892 98.352C36.6 202.767 76.055 255 127.787 255z"/>
					    <use fill="#FFF" fill-opacity=".108" xlink:href="#a"/>
					    <path stroke="#000" d="M125.582 98.07c.647.08 1.154.147 1.593.208.04-.05.087-.095.145-.137 7.22-5.347 14.18-8.673 20.75-10.365 4.465-1.15 8.03-1.416 11.138-1.22.172.01.184.01.534.037 42.432 3.13 61.326 34.6 55.848 83.365-5.833 51.93-38.612 85.543-85.88 85.543-46.545 0-81.88-36.597-86.506-85.552C38.41 119.22 57.434 86.59 99.556 86.59c8.9 0 20.445 4.446 26.026 11.48z"/>
					    <path stroke="#FFF" stroke-width="2" d="M128.76 98.944c-.033.132-.11.304-.233.583-.844.395-.844.395-.867.333l-.127-.016-.38-.054c-.515-.074-1.122-.154-1.957-.255l-.414-.05-.255-.33c-5.213-6.72-16.428-11.064-24.97-11.064-41.064 0-59.58 31.762-54.86 81.717C49.254 218.03 83.984 254 129.71 254c46.457 0 78.637-33 84.39-84.21 5.392-48.003-13.004-78.643-54.47-81.702l-.516-.037c-2.96-.184-6.37.07-10.67 1.177-6.216 1.602-12.815 4.72-19.684 9.717zm-.986-1.086l.034.005.036.005c.01-.028.015-.043-.07-.01z"/>
					    <path fill="#FFF" fill-opacity=".8" fill-rule="nonzero" stroke="#000" d="M128 183c14.912 0 27-12.354 27-27.593 0-8.763-13.428-27.065-21.016-40.5C128.376 104.982 128 98 128 98s-.916 7.395-6.43 17.127c-7.634 13.48-20.57 31.43-20.57 40.28 0 15.24 12.088 27.593 27 27.593z"/>
					    <path fill="#FFF" fill-rule="nonzero" stroke="#000" d="M128 169c12.15 0 22-10.32 22-23.05 0-7.318-10.94-22.606-17.124-33.827C128.306 103.83 128 98 128 98s-.747 6.177-5.238 14.306C116.54 123.566 106 138.56 106 145.95c0 12.73 9.85 23.05 22 23.05z"/>
					  </g>
					</svg>
			</div>

			<div class="site-branding">	
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
			</div>
		<div>
		
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
