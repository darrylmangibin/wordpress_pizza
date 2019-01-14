<?php 

function lapizzeria_styles() {
	//adding stylesheets
	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');

}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');






















 ?>