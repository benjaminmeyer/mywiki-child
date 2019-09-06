<?php

// Enqueue scripts and styles
add_action( 'wp_enqueue_scripts', 'mywiki_child_theme_setup' );
function mywiki_child_theme_setup(){
    // Parent theme script and style enqueue
    wp_enqueue_style( 'google-fonts-open-sans','//fonts.googleapis.com/css?family=Open+Sans', array(), false,null );
    wp_enqueue_style( 'google-fonts-lato', '//fonts.googleapis.com/css?family=Lato', array(), false,null );
    wp_enqueue_style( 'google-fonts-cabin', '//fonts.googleapis.com/css?family=Cabin', array(), false,null );

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), false,null );

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), false, 'all' );
    wp_enqueue_style( 'mywiki-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script( 'bootstrap',  get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '3.0.1');
    wp_enqueue_script( 'mywiki-ajaxsearch',  get_template_directory_uri() . '/js/ajaxsearch.js', array(), '1.0.0');
    wp_enqueue_script( 'mywiki-general',  get_template_directory_uri() . '/js/general.js');
    wp_localize_script( 'mywiki-general', 'my_ajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
    if ( is_singular() ): wp_enqueue_script( 'comment-reply' ); endif;
    // End parent theme script and style enqueue

    //MyWiki Child Theme css
    wp_enqueue_style( 'mywiki-child', get_stylesheet_directory_uri() . '/style.css', array('mywiki-style'), false, 'all' );
}
