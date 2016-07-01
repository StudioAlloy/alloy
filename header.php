<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alloy
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<base href="<?php echo site_url(); ?>/">

<!-- if page is content page -->
<?php if (is_single()) { ?>
<meta property="og:url" content="<?php the_permalink() ?>"/>
<meta property="og:title" content="<?php single_post_title(''); ?> | <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />
<!-- <meta property="og:image:width" content="640"> -->
<!-- <meta property="og:image:height" content="300"> -->
<meta name="twitter:card" content="summary_large_image">
<!-- <meta name="twitter:site" content="@nytimes"> -->
<!-- <meta name="twitter:creator" content="@SarahMaslinNir"> -->
<meta property="twitter:title" content="<?php single_post_title(''); ?> | <?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
<meta name="twitter:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>">
<meta name="twitter:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>">

<!-- if page is others -->
<?php } else { ?>
<meta property="og:site_name" content="<?php bloginfo('name'); ?> <?php bloginfo('description'); ?>" />
<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="wp-content/uploads/icons/image.jpg" />

<!-- <meta property="og:image:width" content="640"> -->
<!-- <meta property="og:image:height" content="300"> -->
<meta name="twitter:card" content="summary_large_image">
<!-- <meta name="twitter:site" content="@nytimes"> -->
<!-- <meta name="twitter:creator" content="@SarahMaslinNir"> -->
<meta property="twitter:title" content="<?php bloginfo('name'); ?> <?php bloginfo('description'); ?>">
<meta name="twitter:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>">
<meta name="twitter:image" content="wp-content/uploads/icons/image.jpg">
<?php } ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'alloy' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php $description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
