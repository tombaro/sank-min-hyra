<?php 
// functions.php

/************* Enqueue scripts and styles. ***************/

function sankminhyra_scripts() {
	// register main stylesheet
	wp_register_style( 'sankminhyra-stylesheet', get_template_directory_uri() . '/library/css/style.css', array(), '', 'all' );

	wp_enqueue_script( 'bootstrap-js', '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_style( 'sankminhyra-stylesheet' );
}
add_action( 'wp_enqueue_scripts', 'sankminhyra_scripts' );


if ( ! function_exists( 'sankminhyra_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

	function sankminhyra_setup() {
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 130, 130 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => __( 'Primary Menu', 'sankminhyra' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'comment-form', 'comment-list', 'gallery', 'caption',
		) );

	}

endif; // sankminhyra_setup
add_action( 'after_setup_theme', 'sankminhyra_setup' );

// Register Custom Navigation Walker
require_once( 'wp_bootstrap_navwalker.php' );
