<?php
/**
 * Android Dev Portfolio theme functions.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access.
}

function android_portfolio_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'android-dev-portfolio' ),
	) );
}
add_action( 'after_setup_theme', 'android_portfolio_setup' );

function android_portfolio_scripts() {
	// Google Fonts used by the design.
	wp_enqueue_style(
		'android-portfolio-fonts',
		'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600&family=IBM+Plex+Sans:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap',
		array(),
		null
	);

	// Main theme stylesheet.
	wp_enqueue_style(
		'android-portfolio-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'android_portfolio_scripts' );
