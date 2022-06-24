<?php
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
function mon_31w_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5',array('search-form') );
	add_theme_support('custom-background');

} 
add_action( 'after_setup_theme', 'mon_31w_setup' );

/* function mon_31w_enqueue() {
	
	wp_enqueue_style('31w-google-font',
	 "https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap", 
	false);
		
} */
add_action( 'wp_enqueue_scripts', 'mon_31w_enqueue' );
?>