<?php
/**
 * Load more posts
 */
function rebuild_load_posts()
{
    $args = unserialize( stripslashes( $_GET['query'] ) );
    $args['paged'] = $_GET['page'] + 1;
    $args['post_status'] = 'publish';

    query_posts( $args );

    if( have_posts() ) {
        while( have_posts() ){
            the_post();

            get_template_part( 'template-parts/loop-item', get_post_type() );
        };
    };
    die();
}
add_action('wp_ajax_loadmore', 'rebuild_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'rebuild_load_posts');