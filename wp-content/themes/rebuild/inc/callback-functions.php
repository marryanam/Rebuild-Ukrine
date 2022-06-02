<?php
/**
 * Callback functions
 */

/**
 * Loop of posts
 *
 * @param array $args - args for WP_Query
 * @param bool $slider - add wrapper for swiper slider
 */
function the_post_loop( array $args = [], bool $slider = false ) {

    $args['post_type'] = $args['post_type'] ? : 'post';
    $args['orderby']   = 'menu_order';

    $wp_query = new WP_Query( $args );

    if ( $wp_query->have_posts() ) {
        while ( $wp_query->have_posts() ) {
            $wp_query->the_post();
            get_template_part( 'template-parts/content', $args['post_type'], ['slider' => $slider] );
        }

    } else {
        get_template_part( 'template-parts/content', 'none' );
    }

    wp_reset_postdata();
}