<?php
/**
 * Template part for displaying "faq" item
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<li class="faq_item textShowUp">
    <div class="faq_title">
        <span class="subtitle_1"><?php the_title(); ?></span>

        <div class="faq_btn">
            <svg class="svg_icon svg_faq">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg_map.svg#svg_faq" />
            </svg>
        </div>
    </div>

    <div class="faq_content_cover">
        <div class="faq_content">
            <?php the_content(); ?>
        </div>
    </div>
</li>
