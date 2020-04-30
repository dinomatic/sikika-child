<?php
/**
 * Sikika Child Theme functions and definitions.
 *
 * @package Sikika Child
 */

/**
 * Enqueue parent theme styles.
 */
function sikika_child_enqueue_parent_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'sikika_child_enqueue_parent_styles' );
