<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>



	<!-- BS CSS-->
<!-- 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	 -->
	<!-- Fuente -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/fonts/fonts.css" /> -->
	<!-- for minified version add this -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/fonts/fonts.min.css" />
	<link rel="stylesheet" href="assets/css/flexslider.css" type="text/css">
 -->
	<!-- CSS local -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/main-style.css"> -->
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="collapse navbar-collapse " id="navbarNav">
		    		
	    	<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
				<?php
				 wp_nav_menu( array(
					'theme_location' => 'header-menu',
				 	'container' => false,
				 	'menu_class' => 'navbar-nav',
				)  ); ?>
			<?php } ?>

		</div>
	</nav>
	



