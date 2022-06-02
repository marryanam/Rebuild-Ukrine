<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rebuild
 */

?>

<a href="<?php the_permalink(); ?>" class="swiper-item">
    <?php the_content(); ?>
</a>
