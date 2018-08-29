<?php 

/**
 * Style Enqueue
 * Registers and Enqueue Styles in head
 *
 * @since   1.0
 * @version 1.2
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_style/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_style/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_style() {

	global $theme_options;
	$theme_data = wp_get_theme();

	/* Register Scripts */
	wp_register_style( 'reset', get_theme_file_uri( '/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen' );
	wp_register_style( 'flexslider', get_theme_file_uri( '/assets/css/flexslider.css'), null, '2.7.1', 'screen' );
	wp_register_style( 'flickity', get_theme_file_uri( '/assets/css/flickity.css'), null, '2.1.0', 'screen' );
	wp_register_style( 'main_style', get_theme_file_uri( '/assets/css/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen' );
	wp_register_style( 'fonts', get_theme_file_uri( '/assets/css/fonts.css'), null, '2.7.1', 'screen' );
	wp_register_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', null, null, null);

	wp_register_style( 'font', 'https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Handlee', null, null, null);

	wp_register_style( 'mainstyle', get_theme_file_uri( '/assets/css/main-style.css'), null, '2.7.1', 'screen' );

	wp_register_style( 'main', get_theme_file_uri( '/assets/css/main.css'), null, '2.7.1', 'screen' );


	/* Enqueue Scripts */
	if ( $theme_options['slider']['flexslider'] ) {
		wp_enqueue_style( 'flexslider' );
	}

	if ( $theme_options['slider']['flickity'] ) {
		wp_enqueue_style( 'flickity' );
	}

	wp_enqueue_style( 'main_style' );
	wp_enqueue_style( 'bootstrap' );
	wp_enqueue_style( 'mainstyle' );
	wp_enqueue_style( 'font' );
	wp_enqueue_style( 'main' );
}


add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
