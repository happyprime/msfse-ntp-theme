<?php
/**
 * Configure the theme.
 *
 * @package msfse-ntp-theme
 */

namespace MSFSENTPTheme\ThemeSetup;

add_action( 'after_setup_theme', __NAMESPACE__ . '\configure_theme_support' );
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );

/**
 * Add theme support for various built-in features.
 */
function configure_theme_support() {
	add_theme_support( 'align-wide' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'block-template-parts' );

	add_theme_support(
		'html5',
		[
			'search-form',
			'gallery',
			'caption',
			'style',
			'script',
		]
	);

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );

	register_nav_menu( 'site-navigation', 'Site Navigation' );
	register_nav_menu( 'network-sites-navigation', 'Network Sites' );
}

/**
 * Manage the styles registered and unregistered by the theme.
 */
function enqueue_assets() {
	wp_enqueue_style(
		'msfse-ntp-theme-style',
		get_stylesheet_uri(),
		[],
		filemtime( dirname( __DIR__ ) . '/style.css' )
	);
}
