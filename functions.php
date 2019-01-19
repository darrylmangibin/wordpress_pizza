<?php 

function lapizzeria_setup() {
	add_theme_support('post-thumbnails');

	add_image_size('boxes', 437, 291, true);

	add_image_size('specialties', 768, 515, true);
}
add_action('after_setup_theme', 'lapizzeria_setup');

function lapizzeria_styles() {
	// adding stylesheet
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,700,900', array(), '1.0.0');
    wp_enqueue_style('fluid-box-css', get_template_directory_uri() . '/css/fluidbox.min.css', array(), '1.0');
	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0');

	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7');
	
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array('normalize'), '1.0');

	// scripts
	wp_enqueue_script('jquery');

    wp_enqueue_script('fluid-box-js', get_template_directory_uri() . '/js/jquery.fluidbox.min.js', array('jquery'), '1.0', true);

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


// add custom post type
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Pizzas', 'Lapizzeria' ),
        'singular_name'       => _x( 'Pizzas', 'Lapizzeria' ),
        'name_admin_bar'	  => _x( 'Pizzas', 'admin-menu', 'lapizzeria' ),
        'menu_name'           => __( 'Lapizzeria', 'lapizzaeria' ),
        'parent_item_colon'   => __( 'Parent menu', 'lapizzeria' ),
        'all_items'           => __( 'All Menus', 'lapizzeria' ),
        'view_item'           => __( 'View Menu', 'lapizzeria' ),
        'add_new_item'        => __( 'Add New menu', 'lapizzeria' ),
        'add_new'             => __( 'Add New', 'lapizzeria' ),
        'edit_item'           => __( 'Edit menu', 'lapizzeria' ),
        'update_item'         => __( 'Update menu', 'lapizzeria' ),
        'search_items'        => __( 'Search menu', 'lapizzeria' ),
        'not_found'           => __( 'Not Found', 'lapizzeria' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'lapizzeria' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'menus', 'lapizzeria' ),
        'description'         => __( 'description', 'lapizzeria' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'category' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'query_var'		      => true,
        'menu_position'       => 6,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'rewrite'   		  => array('slug' => 'specialties')
    );
     
    // Registering your Custom Post Type
    register_post_type( 'specialties', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );

// widgets
function lapizzeria_widgets(){
    register_sidebar(array(
      'name' => 'Blog Sidebar',
      'id' => 'blog_sidebar',
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>' 
    ));
}
add_action('widgets_init', 'lapizzeria_widgets');


 ?>