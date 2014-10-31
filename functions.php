<?php
define('THEME_NAME', ' ');

// Enable Features
	add_theme_support( 'post-thumbnails' );
	add_editor_style('/css/editor-style.css');
	register_nav_menus(array(
		'primary' => 'Main Header Menu',
		'' => '',
		'' => '')
	);

// Image sizes
	add_image_size( 'slider-image', 1440, 600, true );
	add_image_size( 'home-square', 680, 450, true );
	add_image_size( 'member-image', 325, 270, true );

// Functions

function custom_styles(){
	wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
}

function custom_scripts(){
	global $template_directory_uri;
	wp_localize_script( 'main', 'url', array(
		'template' => $template_directory_uri,
		'base' => site_url(),
	));
	
	wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.1.min.js', array('jquery'), '', false);
	wp_enqueue_script('matchHeight', get_template_directory_uri() . '/js/vendor/jquery.matchHeight-min.js', array('jquery'), '', false);
	wp_enqueue_script('owlCarousel', get_template_directory_uri() . '/js/vendor/owl.carousel.min.js', array('jquery'), '', true);
	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
}

// Add Actions
	add_action( 'wp_enqueue_scripts', 'custom_styles', 30 );
	add_action( 'wp_enqueue_scripts', 'custom_scripts', 30 );

	add_filter('next_posts_link_attributes', 'posts_link_attributes');
	add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="btn primary large"';
}