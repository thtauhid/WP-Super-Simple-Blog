<?php

//Adding bootstrap.
function super_simple_blog_add_bootstrap() {

    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/assets/js/jquery-3.2.1.slim.min.js' );
    wp_enqueue_script( 'popper_js', get_template_directory_uri() . '/assets/js/popper.min.js' );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );

    
    }
    
    add_action( 'wp_enqueue_scripts', 'super_simple_blog_add_bootstrap');


//Adding WP Bootstrap Navwaalker
require_once get_template_directory() . '/assets/classes/class-wp-bootstrap-navwalker.php';


//Registering menu.
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'super-simple-blog' ),
) );


//Excerpt Length
function excerpt_length()	{
	return 20;
}

add_filter('excerpt_length', 'excerpt_length');
add_theme_support('post-thumbnails');
add_theme_support( 'automatic-feed-links' );

//Addding title tag support.
add_theme_support( 'title-tag' );


if ( ! isset( $content_width ) ) {
	$content_width = 650;
}