<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function my_custom_login_logo() {
	echo '<style type="text/css">h1 a { background-image:url(/wp-content/uploads/2020/08/gxcommunication.png) !important; background-size: 200px 152px !important; width: 200px !important; height: 152px !important;}</style>';
}

add_action('login_head', 'my_custom_login_logo');  
 
 
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts' );
