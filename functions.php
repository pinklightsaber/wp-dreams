<?php 

/**
 * Import functions folder
 * Imports all the files inside the functions folder 
 * and adds them into functions file
 *
 * @return  void
 * @since   1.0
 * @version 1.3
 */
require_once get_template_directory() . '/functions/__get_files_from.php';
$files = get_files_from( $theme_options['functions'] );

foreach($files as $file) {
	require_once $file;
}


/**
 * Check Minimum WP version
 * This theme only works in WordPress 4.8 or later.
 *
 * @return  void
 * @since   1.0
 */
if ( version_compare( $GLOBALS['wp_version'], $theme_options['wp_min_version'], '<' ) ) {
	require get_template_directory() . '/functions/back-compat.php';
	return;
}


function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'nav-item';
  return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_li',1,3);


add_filter( 'nav_menu_link_attributes', 'dl_menu_add_class', 10, 3 );

function dl_menu_add_class( $atts, $item, $args ) {
    $class = 'nav-link'; // or something based on $item
    $atts['class'] = $class;
    return $atts;
}