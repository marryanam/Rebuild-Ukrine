<?php
/**
 * Load more posts handler
 */
function rebuild_load_posts()
{
    $args = unserialize( stripslashes( $_GET['query'] ) );
    $args['paged']       = $_GET['page'] + 1;
    $args['post_status'] = 'publish';

    the_post_loop($args);

    die();
}
add_action('wp_ajax_loadmore', 'rebuild_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'rebuild_load_posts');