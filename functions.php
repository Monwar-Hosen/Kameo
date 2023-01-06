<?php

/* basic theme setup start here */

add_action('after_setup_theme', 'add_theme_setup');

if(!function_exists('add_theme_setup')){
	
	function add_theme_setup(){
		// theme support for feed-links 
		add_theme_support('automatic-feed-links');
		// theme support form post-thumbnails 
		add_theme_support('post-thumbnails');
		// set post thumbnails size 
		set_post_thumbnail_size(1200, 9999);
		// theme support for title tag 
		add_theme_support('title-tag');
		// theme support for full and align images 
		add_theme_support('align-wide');
		// theme support for responsive embeds 
		add_theme_support('responsive-embeds');
		// switch default core markup 
		
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets'
			)
		);
		
		// theme support for post formats 
		
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'gallery',
				'video',
				'audio',
				'link',
				'quote',
				'status'
			)
		);
		
		// register nav menus 
		
		register_nav_menus(
		
			array(
			
				'header_left-menu'	=>	'Header Left Menu',
				'header_right-menu'	=>	'Header Right Menu',
				'mobile-menu'		=>	'Mobile Menu',
				
			)
			
		);
		
	}
	
}

/* basic theme setup end here */

/* enqueue theme scripts function start here */

add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');

if(!function_exists('enqueue_theme_scripts')){
	
	function enqueue_theme_scripts(){
		
		// enqueue all css files 
		
		wp_enqueue_style('main-style', get_template_directory_uri(). '/style.css' );
		wp_enqueue_style('fonts-style', get_template_directory_uri(). '/fonts/stylesheet.css' );
		wp_enqueue_style('all', get_template_directory_uri(). '/css/all.css' );
		wp_enqueue_style('bootstrap-min', get_template_directory_uri(). '/css/bootstrap.min.css' );
		wp_enqueue_style('hc-offcanvas-nav', get_template_directory_uri(). '/css/hc-offcanvas-nav.css' );
		wp_enqueue_style('slick', get_template_directory_uri(). '/css/slick.css' );
		wp_enqueue_style('style', get_template_directory_uri(). '/css/style.css', false, '3.6', 'all');
		wp_enqueue_style('responsive', get_template_directory_uri(). '/css/responsive.css', false, '2.5', 'all');
		
		// enqueue all js files 
		
		wp_enqueue_script('jquery');
		wp_enqueue_script('all', get_template_directory_uri(). '/js/all.js', array(), 1.0, true);
		wp_enqueue_script('popper-min', get_template_directory_uri(). '/js/popper.min.js', array(), 1.0, true);
		wp_enqueue_script('bootstrap-min', get_template_directory_uri(). '/js/bootstrap.min.js', array(), 1.0, true);
		wp_enqueue_script('hc-offcanvas-nav', get_template_directory_uri(). '/js/hc-offcanvas-nav.js', array(), 1.0, true);
		wp_enqueue_script('slick-min', get_template_directory_uri(). '/js/slick.min.js', array(), 1.0, true);
		
		// Map API Key
		$map_key								=	get_field('map_key', 'option');
		wp_enqueue_script('maps', 'https://maps.googleapis.com/maps/api/js?language=en&key='.$map_key.'&libraries=places');
		wp_enqueue_script('g-maps', get_template_directory_uri(). '/js/maps.js', array(), 1.0, true);
		wp_enqueue_script('custom', get_template_directory_uri(). '/js/custom.js', array(), 1.4, true);
		
	}
	
}

/* enqueue theme scripts function end here */

/* register sidebars function start here */

add_action('widgets_init', 'register_sidebar');
if(function_exists('register_sidebar')){
	register_sidebar(
		array(
			'name'				=>		'Widget Area',
			'id'				=>		'widget_area',
			'before_widget'		=>		'',
			'after_widget'		=>		'',
			'before_title'		=>		'',
			'after_widget'		=>		''
		)
	);
}

/* register sidebars function end here */

/* acf theme option enable function start here */

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

/* acf theme option enable function end here */

/* map api key function start here */

function my_acf_google_map_api( $api ){
    $map_key = get_field('map_key', 'option');
    $api['key'] = $map_key ;
    return $api;

}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');
/* map api key function end here */

/* custom post type function start here */
if(!function_exists('room_post_type')){
	
	function room_post_type(){
		
		$labels		=	array(
			'name'			=>		'Rooms',
		);
		
		$args		=	array(
			'labels'		=>		$labels,
			'public'		=>		true,
			'supports'		=>		array( 'title', 'editor', 'author', 'thumbnail', 'excerpt',  'custom-fields', 'comments', 'revisions','post-formats',),
			'menu_icon'		=>		'dashicons-admin-multisite',
			'show_admin_column' => true,
		);
		
		register_post_type('room', $args);
		
		/*$cat_labels		=	array(
			'name'			=>		__('Categories'),
		);
		
		$cat_args		=	array(
			'labels'		=>		$cat_labels,
			'hierarchical' 	=> true,
			'show_admin_column' => true,
		);
		
		register_taxonomy('product_cat', 'product', $cat_args);
		*/

	}
	
add_action('init', 'room_post_type');		
	
}
/* custom post type function end here */