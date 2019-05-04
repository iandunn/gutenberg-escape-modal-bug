<?php

/*
 * Plugin Name: Gutenberg Escape Modal Bug
 * Author:      Ian Dunn
 * Author URI:  https://iandunn.name
 */

function gemb_register_screen() {
	add_menu_page(
		'Gutenberg Escape Modal Bug',
		'Gutenberg Escape Modal Bug',
		'manage_options',
		'gutenberg-escape-modal-bug',
		'__return_empty_string',
		'dashicons-carrot'
	);
}
add_action( 'admin_menu', 'gemb_register_screen' );

function gemb_enqueue_scripts() {
	wp_enqueue_script(
		'gutenberg-escape-modal-bug',
		plugins_url( 'build/index.js', __FILE__ ),
		array(
			'wp-components',
			'wp-element',
			'wp-i18n',
			'wp-components',
		),
		filemtime( __DIR__ . '/build/index.js' ),
		true
	);

	wp_enqueue_style(
		'gutenberg-escape-modal-bug',
		plugins_url( 'style.css', __FILE__ ),
		array( 'wp-components' ),
		filemtime( __DIR__ . '/style.css' ),
		'all'
	);
}
add_action( 'admin_enqueue_scripts', 'gemb_enqueue_scripts' );
