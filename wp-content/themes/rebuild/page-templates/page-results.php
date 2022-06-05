<?php
/**
 * Template name: Results
 */
?>

<?php get_header(); ?>

<main class="page-wrapper results-page">
    <section class="scroll-y">
        <div class="container">
            <h1 class="heading"><?php the_title(); ?></h1>

            <div class="row">

                <?php the_post_loop([
                    'post_type' => 'result'
                ]); ?>

            </div>

            <div class="btn btn-primary">
                <span>See more</span>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>