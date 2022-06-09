<?php
/**
 * Template part for displaying "team" item
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<div class="item">
    <div class="img_wrap">
        <img src="<?php the_post_thumbnail_url(); ?>"
             alt="<?php the_title(); ?>"
             title="<?php the_title(); ?>"
        >
    </div>
    <p class="subtitle_3"><?php the_title(); ?></p>
    <p><?php the_field('position'); ?></p>
</div>
