<?php
/**
 * Template part for displaying "result" item
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<?php if ( $args['slider'] ) : ?>
<div class="swiper-slide">
<?php endif; ?>

    <a href="<?php the_permalink(); ?>" class="swiper-item">
        <div class="img_wrap">
            <?php rebuild_post_thumbnail(); ?>
        </div>

        <div class="info">
            <span><?php rebuild_posted_on(); ?></span>
            <span>From <?php the_field('city'); ?></span>
        </div>

        <p class="subtitle_3"><?php the_title(); ?></p>
    </a>

<?php if ( $args['slider'] ) : ?>
</div>
<?php endif; ?>
