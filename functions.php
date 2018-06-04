<?php

//Adding bootstrap.
function moduler_add_bootstrap() {

    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/assets/js/jquery-3.2.1.slim.min.js' );
    wp_enqueue_script( 'popper_js', get_template_directory_uri() . '/assets/js/popper.min.js' );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js' );

    
    }
    
    add_action( 'wp_enqueue_scripts', 'moduler_add_bootstrap');