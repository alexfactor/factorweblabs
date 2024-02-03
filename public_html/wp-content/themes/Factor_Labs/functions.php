<?php
/**
 * All custom functions for v1 theme
 */

 /**
 * Add theme constants for use in functions and templates
 */

require_once 'custom-functions/constants.php';

/** End add theme constants */

 //Enqueue React JS for React Components
/* add_action('wp_enqueue_scripts', 'my_react_app');
function my_react_app()
{
	wp_enqueue_script(
		'my_react_app',
		get_stylesheet_directory_uri() . '/build/index.js', // This refer to the built React app
		['wp-element'], //This dependency indicates that you need React at Frontend
		rand(), // This could be changed to the theme version for production
		true
	);
}

//Enqueue SCSS for React Components
function react_enqueue_style() {
	wp_enqueue_style('main', get_stylesheet_uri()); 
	wp_enqueue_style('reactscss', get_stylesheet_directory_uri() . '/build/index.css'); 
}
add_action( 'wp_enqueue_scripts', 'react_enqueue_style' );
*/
//Enqueue CSS
require_once 'custom-functions/assets/load/global/css/enqueue.php';

//Enqueue JS
require_once 'custom-functions/assets/load/global/js/enqueue.php';

//Allow different file type uploads
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');

// Register <header> and <footer> menus
require_once 'custom-functions/admin/widgets/init-nav_menus.php';


// Add theme support for Featured Images
require_once 'custom-functions/admin/helpers/helper-add_featured_images.php';

// Add excerpt support for Page post type
//require_once 'custom-functions/admin/helpers/helper-add_page_excerpt.php';

// Show page template filename
require_once 'custom-functions/admin/helpers/helper-show_template.php';

/**
 * Post functions
 */

	// Modify `the_excerpt()` length to 20 words
	require_once 'custom-functions/posts/content/content-the_excerpt_length.php';

	// Create custom blog excerpt
	require_once 'custom-functions/posts/content/content-theme_post_excerpt.php';

	// Set blog post meta (author, date)
	require_once 'custom-functions/posts/content/content-theme_post_meta.php';

/**
 * End post functions
 */

// Prevent WP from adding <p> tags on pages
function disable_wp_auto_p( $content ) {
	if ( is_page() || is_front_page()) {
	  remove_filter( 'the_content', 'wpautop' );
	  remove_filter( 'the_excerpt', 'wpautop' );
	}
	return $content;
  }
  add_filter( 'the_content', 'disable_wp_auto_p', 0 );

 /** End Auto P tags */ 

?>