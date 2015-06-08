<?php

/*
*  Function Definitions for The Matter of Records Theme
*/

add_action('after_setup_theme','gatogordo_start', 16);

function gatogordo_start(){
	add_action('wp_enqueue_scripts', 'gatogordo_scripts_styles', 999);
	add_theme_support( 'post-thumbnails' );
	add_action( 'init', 'gatogordo_register_my_menus' );
}

function gatogordo_scripts_styles(){
	//register styles
	wp_register_style('gatogordo_fonts', 'http://fonts.googleapis.com/css?family=Roboto:100,300,400,700,100italic,300italic,400italic,700italic&subset=latin,latin-ext|Oswald:300,400&subset=latin,latin-ext');
	wp_register_style('gatogordo_fontawesome', 'http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css');
	wp_register_style('gatogordo_stylesheet', get_stylesheet_uri());
	//enqueue styles
	wp_enqueue_style('gatogordo_fonts');
	wp_enqueue_style('gatogordo_fontawesome');
	wp_enqueue_style('gatogordo_stylesheet');
	//register scripts
	wp_register_script('gatogordo_script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'), '',  true);
	//enqueue scripts
	wp_enqueue_script('gatogordo_script');
}

function gatogordo_register_my_menus() {
	register_nav_menus(
    	array(
      		'header-left' => __( 'Header Left' ),
      		'header-right' => __( 'Header Right' ),
      		'footer' => __( 'Footer' )
    	)
  	);
}

acf_add_options_page();
