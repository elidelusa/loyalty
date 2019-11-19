<?php

add_action( 'after_setup_theme', 'loyalty_theme_setup' );
add_action( 'wp_enqueue_scripts', 'loyalty_theme_enqueue_script' );

function loyalty_theme_setup() {
	global $content_width;

	add_editor_style();
	add_theme_support( 'post-thumbnails' );

	if ( ! isset( $content_width ) ) { $content_width = 1920; }

	register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'loyaltytheme' ) ) );

}


function loyalty_theme_enqueue_script() {
	global $post;
	$page_slug = $post->post_name;


	wp_enqueue_style( 'loyalty-bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'loyalty-fontawesome', get_template_directory_uri() . '/vendor/fontawesome-free/css/all.min.css' );

	wp_enqueue_style( 'google-fonts-montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700' );
	wp_enqueue_style( 'google-fonts-kaushan', 'https://fonts.googleapis.com/css?family=Kaushan+Script' );
	wp_enqueue_style( 'google-fonts-droid', 'https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' );
	wp_enqueue_style( 'google-fonts-roboto', 'https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' );

	wp_enqueue_style( 'loyalty-default-style', get_template_directory_uri() . '/css/loyalty.min.css' );
	wp_enqueue_style( 'loyalty-style', get_stylesheet_uri() );


	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'loyalty-bootstrap-bundle-script', get_template_directory_uri() .'/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'loyalty-jquery-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'loyalty-jquery-jqvalidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array('jquery'), '', true );
	wp_enqueue_script( 'loyalty-default-script', get_template_directory_uri() . '/js/loyalty.min.js', array('jquery'), '', true );


}


?>