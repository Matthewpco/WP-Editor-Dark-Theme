<?php
/**
 * @package wp-editor-dark-theme
 * @version 1.0.4
 */
/*
Plugin Name: WP Editor Dark Theme
Plugin URI: https://github.com/Matthewpco/WP-Editor-Dark-Theme
Description: Changes theme editor styles to a dark mode with better user experience.
Author: Matthew Payne
Version: 1.0.4
Author URI: https://wpwebdevelopment.com
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Enqueue styles for admin area
function wp_editor_dark_theme_enqueue_styles() {
	wp_enqueue_style( 'styles', plugins_url ( 'css/styles.css', __FILE__ ));
}

// Hooks
add_action('admin_enqueue_scripts', 'wp_editor_dark_theme_enqueue_styles');