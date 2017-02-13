<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vertu2017
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vertu2017' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        <?php if( has_header_image() ) {
            $homeurl = home_url('/');
            if (network_site_url()) {
                $homeurl = network_site_url('/');
            }
        }
        ?>


		<nav id="site-navigation" class="main-navigation" role="navigation">
            <div class="ver-row">
                <div class="ver-col">&nbsp;</div>
                <div class="ver-col">
                    <a href="<?= esc_url($homeurl); ?>"><img src="<?php header_image();?>" class="site-header-logo"/></a></div>
                <div class="ver-col">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span class="dashicons dashicons-menu"></span> </button></div>
            </div>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

        <?php
        if ( is_page() && has_post_thumbnail() ) :
            the_post_thumbnail('page-header');
        endif;
        ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
