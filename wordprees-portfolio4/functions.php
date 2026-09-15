<?php
/**
 * Flutter Dev Portfolio theme functions.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access.
}

function flutter_portfolio_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'flutter-dev-portfolio' ),
	) );
}
add_action( 'after_setup_theme', 'flutter_portfolio_setup' );

function flutter_portfolio_scripts() {
	// Google Fonts used by the design.
	wp_enqueue_style(
		'flutter-portfolio-fonts',
		'https://fonts.googleapis.com/css2?family=Sora:wght@500;600;700&family=Manrope:wght@400;500;600&family=JetBrains+Mono:wght@400;500&display=swap',
		array(),
		null
	);

	// Main theme stylesheet.
	wp_enqueue_style(
		'flutter-portfolio-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'flutter_portfolio_scripts' );
