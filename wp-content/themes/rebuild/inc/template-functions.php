<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package rebuild
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function rebuild_body_classes( $classes ) {
	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'rebuild_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function rebuild_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'rebuild_pingback_header' );

/**
 * Register Blocks
 *
 * @see https://www.billerickson.net/building-gutenberg-block-acf/#register-block
 */
function acf_register_blocks() {

    if (!function_exists('acf_register_block'))
        return;

    acf_register_block(array(
        'name'              => 'slider',
        'title'             => __('Slider', 'rebuild'),
        'render_template'   => 'template-parts/block-slider.php',
        'category'          => 'formatting',
        'icon'              => 'dashicons-slides',
        'mode'              => 'false',
        'keywords'          => array('slider')
    ));

    acf_register_block(array(
        'name'              => 'results',
        'title'             => __('Results', 'rebuild'),
        'render_template'   => 'template-parts/block-features.php',
        'category'          => 'formatting',
        'icon'              => 'dashicons-slides',
        'mode'              => 'false',
        'keywords'          => array('result')
    ));
}

add_action('acf/init', 'acf_register_blocks');
