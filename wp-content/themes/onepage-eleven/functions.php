<?php
/**
 * Loads the child theme textdomain.
 */
function onepageeleven_child_theme_setup() {
    load_child_theme_textdomain('onepageeleven');
}
add_action( 'after_setup_theme', 'onepageeleven_child_theme_setup' );

function onepageeleven_child_enqueue_styles() {
    $parent_style = 'onepageeleven-parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	 wp_enqueue_style( 'onepageeleven-style',get_stylesheet_directory_uri() . '/onepageeleven.css');
}
add_action( 'wp_enqueue_scripts', 'onepageeleven_child_enqueue_styles',99);
?>