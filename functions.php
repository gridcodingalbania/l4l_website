<?php
require TEMPLATEPATH . '/vendor/autoload.php';
App\Init::init();
function theme_styles()  
{ 

	// Example of loading a jQuery slideshow plugin just on the homepage
	wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css' );

	// Load all of the styles that need to appear on all pages
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );

	// Conditionally load the FlexSlider CSS on the homepage
	if(is_page('home')) {
		wp_enqueue_style('flexslider');
	}

}
add_action('wp_enqueue_scripts', 'theme_styles');
add_theme_support('woocommerce');