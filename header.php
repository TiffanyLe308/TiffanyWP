<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tiffany
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

<?php wp_head(); ?>


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
	 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'backyardcrew' ); ?></a>

	<!-- NAVBAR -->
	<header>
		<nav class="navbar" id="navbar-primary" role="navigation">
			 <div class="container">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
							 <span class="sr-only">Toggle navigation</span>
							 <span class="icon-bar"></span>
							 <span class="icon-bar"></span>
							 <span class="icon-bar"></span>
					 </button>

					 <div class="brand-centered">
						 <a class="navbar-brand" href="/BackyardCrew"><img id="logo-navbar-middle" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-3.png" alt="main logo"></a>
					 </div>
				</div>

					<?php
						wp_nav_menu( array(
							'menu'						=> 'menu-1',
							'theme_location'	=> 'menu-1',
							'depth'           =>  4,
							'container'   		=> 'div',
							'container_class'	=> 'navbar-collapse collapse',
							'container_id'    => 'myNavBar',
							'menu_class' 			=> 'nav navbar-nav navbar-right menu-1'
						) );
					?>

				 <!-- <ul class="nav navbar-nav navbar-right">
					 <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
							<li>
								<input type="search" placeholder="Search" value="<?php the_search_query(); ?>" name="s" id="s" />
							</li>
							<li>
								<button type="button" class="button" id="searchsubmit" value="Search" >Search</button>
							</li>
						</form>
				 </ul> -->
			 </div>
		 </nav>
	 </header>

	 <!-- <section id="feature">
			 <div class="row">
					 <div class="large-12 columns">
							 <img src="<?php bloginfo('template_directory'); ?>/images/logo-1.jpg" alt="guitar image">
					 </div>
			 </div>
	 </section> -->

	<div id="content" class="site-content">
