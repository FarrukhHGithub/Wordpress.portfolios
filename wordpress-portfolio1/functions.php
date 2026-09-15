<?php
/**
 * MERN Portfolio theme functions.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Basic theme setup.
 */
function mern_portfolio_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'mern_portfolio_setup' );

/**
 * Enqueue fonts and the theme stylesheet.
 */
function mern_portfolio_assets() {
	wp_enqueue_style(
		'mern-portfolio-fonts',
		'https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'mern-portfolio-style',
		get_stylesheet_uri(),
		array( 'mern-portfolio-fonts' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'mern_portfolio_assets' );
