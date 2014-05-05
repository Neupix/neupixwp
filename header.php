<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package neupix
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/main.css">
	<link href="<?php echo get_site_url(); ?>/favicon.ico" rel="icon" type="image/x-icon" />
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="header" class="site-header">
		<div class="w p">
			
		</div>
	</header>

	<div id="content" class="site-content">
