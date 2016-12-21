<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Elabora
 * @since Elabora 2016
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Quattrocento" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
		<header class="container-fluid">
			<div class="container">
				 <?php if (is_front_page() ) : ?>
					<nav class="menu-header">
						<ul>
							<a href="#passeios"><li>Passeios</li></a>
							<a href="#bgempresa"><li>Benefícios</li></a>
							<a href="#parceiros"><li>Parceiros</li></a>
							<a href="criativa-turismo/blog"><li>Blog</li></a>
							<a href="#contato"><li>Contato</li></a>
						</ul>	
					</nav>
				<div class="clear"></div>
				<?php else : ?>
					<nav class="menu-header">
						<ul>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><li>Passeios</li></a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><li>Benefícios</li></a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><li>Parceiros</li></a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><li>Blog</li></a>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><li>Contato</li></a>
						</ul>	
					</nav>
				<div class="clear"></div>
				<?php endif; ?>
			</div><!-- .site-header-container -->
		</header><!-- .site-header -->
		<div class="header-image col-md-offset-1 col-lg-offset-2">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo bloginfo('template_directory'); ?>/img/logo.png">
			</a>
		</div><!-- .header-image -->


		<div id="content" class="site-content">
