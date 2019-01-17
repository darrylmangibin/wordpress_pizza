<?php 

function lapizzeria_setup() {
	add_theme_support('post-thumbnails');

	add_image_size('boxes,', 437, 291, true);
}
add_action('after_setup_theme', 'lapizzeria_setup');

function lapizzeria_styles() {
	// adding stylesheet
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700,900', array(), '1.0.0');
	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0');

	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7');
	
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');

	// scripts
	wp_enqueue_script('jquery');

	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);

	
}
add_action('wp_enqueue_scripts', 'lapizzeria_styles');

// add menus
function lapizzeria_menus(){
	register_nav_menus( array( 
		'header-menu' => __('Header Menu'),
		'social-menu' => __('Social Menu')
	 ) );
}
add_action('init', 'lapizzeria_menus');






 ?>