<?php

// Add scripts and stylesheets
function startwordpress_scripts() {
	wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .  '/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'maw-slider', get_template_directory_uri() . '/js/maw-slider.js', array( 'jquery' ), '3.3.6', true );
	wp_enqueue_script( 'bandsintown', 'https://widget.bandsintown.com/main.min.js');
}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts');

// WordPress Titles
function startwordpress_wp_title( $title, $sep ) {
	global $paged, $page;
	if ( is_feed() ) {
		return $title;
	}
	// Add the site name.
	$title .= get_bloginfo( 'name' );
	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}
	return $title;
}
add_filter( 'wp_title', 'startwordpress_wp_title', 10, 2 );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

function wpb_custom_new_menu() {
  register_nav_menu('custom-menu',__( 'Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

define('WP_MEMORY_LIMIT', '64M');
