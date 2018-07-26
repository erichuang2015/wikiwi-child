<?php
defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    $theme = wp_get_theme();
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css', false, $theme->get( 'Version' ) );
}