<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package rebuild
 */

/**
 * Prints the current post-date/time.
 */
function rebuild_posted_on() {
    echo esc_attr( get_the_date() );
}

/**
 * Displays an optional post thumbnail.
 */
function rebuild_post_thumbnail() {
    ?>
    <img src="<?php the_post_thumbnail_url(); ?>"
         alt="<?php the_title(); ?>"
         title="<?php the_title(); ?>">

    <?php
}

/**
 * Displays "support" button
 */
function rebuild_support_button() {
    ?>

    <div class="btn-secondary">
        <svg class="svg_icon btn_svg_2">
            <use xlink:href="<?php echo get_template_directory_uri();  ?>/img/svg_map.svg#btn_svg_2" />
        </svg>
        <span>Support</span>
        <svg class="svg_icon btn_svg_2">
            <use xlink:href="<?php echo get_template_directory_uri();  ?>/img/svg_map.svg#btn_svg_3" />
        </svg>
    </div>

    <?php
}


/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function rebuild_entry_footer() {
    // Hide category and tag text for pages.
    if ( 'post' === get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $categories_list = get_the_category_list( esc_html__( ', ', 'rebuild' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'rebuild' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }

        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'rebuild' ) );
        if ( $tags_list ) {
            /* translators: 1: list of tags. */
            printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'rebuild' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        }
    }

    if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
        echo '<span class="comments-link">';
        comments_popup_link(
            sprintf(
                wp_kses(
                /* translators: %s: post title */
                    __( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'rebuild' ),
                    array(
                        'span' => array(
                            'class' => array(),
                        ),
                    )
                ),
                wp_kses_post( get_the_title() )
            )
        );
        echo '</span>';
    }

    edit_post_link(
        sprintf(
            wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
                __( 'Edit <span class="screen-reader-text">%s</span>', 'rebuild' ),
                array(
                    'span' => array(
                        'class' => array(),
                    ),
                )
            ),
            wp_kses_post( get_the_title() )
        ),
        '<span class="edit-link">',
        '</span>'
    );
}
