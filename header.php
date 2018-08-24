<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>

	<header>
	<nav class="navbar navbar-expand-lg navbar-light">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  	</button>
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

	
	</header>




