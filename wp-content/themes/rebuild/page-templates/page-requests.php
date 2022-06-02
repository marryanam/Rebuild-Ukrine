<?php
/**
 * Template name: Requests
 */
?>

<?php get_header(); ?>

<main class="page-wrapper requests_page">

    <div class="container">
        <div class="row block_1">
            <p class="heading"><?php the_title(); ?></p>
            <div class="desc">
                <?php the_content(); ?>
            </div>
        </div>

        <div class="row block_2">

            <?php the_post_loop([
                'post_type' => 'request'
            ]); ?>

        </div>
    </div>

</main>

<?php get_footer(); ?>
