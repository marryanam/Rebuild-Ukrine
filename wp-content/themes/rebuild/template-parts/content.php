<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rebuild
 */

?>

<section class="section_1 scroll-y">
    <div class="container">
        <?php rebuild_post_thumbnail(); ?>

        <div class="row">
            <span><?php rebuild_posted_on(); ?></span>
            <span>From <?php the_field('city'); ?></span>
        </div>

        <p class="heading">
            <?php the_title(); ?>
        </p>

        <div class="content editor">
            <?php the_content(); ?>
        </div>
    </div>
</section>