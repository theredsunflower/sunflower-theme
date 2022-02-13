<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tulip
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="header">
		<div id="sitename">
			<h1>Code Camp by Red Sunflower, Inc.</h1>
			<p>Build a website, learn to code.</p>
		</div>

	<nav>
		<div id="menu">
            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
        </div>
	</nav><!-- #site-navigation -->
	
	</header><!-- #masthead -->
	