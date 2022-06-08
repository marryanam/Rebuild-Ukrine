<?php
/**
 * Template part for displaying "partner" item
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<div class="partners-item">
    <div class="img_wrap">
        <img src="<?php the_post_thumbnail_url(); ?>"
             alt="<?php the_title(); ?>"
             title=<?php the_title(); ?>"
         >
    </div>
    <p><?php the_title(); ?></p>
</div>
