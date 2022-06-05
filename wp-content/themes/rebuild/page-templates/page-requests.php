<?php
/**
 * Template name: Requests
 */
?>

<?php get_header(); ?>

<main class="page-wrapper requests_page">
    <section class="scroll-y">
        <svg  class="scroll-y scrolling-svg" width="364" height="444" viewBox="0 0 364 444" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path  class="scrolling-path" d="M1 1C157.227 20.066 185.993 93.9374 178.575 138.559C174.275 164.421 160.5 180 153.5 173.5C135.335 156.633 274.682 95.9546 353.203 193.094C387.576 235.618 424.077 377.777 379.052 443" stroke="#9BA6EE" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
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
        <svg class="scroll-y scrolling-svg scrolling-svg-2" width="1285" height="115" viewBox="0 0 1285 115" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="scrolling-path" d="M1 47.4997C31 67.4997 44.5 44.8576 83 47.4997C95 48.3233 108.401 56.9997 113.5 64.9997C113.812 65.4889 114.1 65.9958 114.364 66.5159M114.364 66.5159C118.128 73.9171 117.106 83.9996 111.5 83.9997C106.706 83.9998 106.687 76.7123 114.364 66.5159ZM114.364 66.5159C115.919 64.4511 117.79 62.2669 120 59.9998C137.5 42.0509 176.064 36.0776 204.5 39.9999C262.5 47.9999 306.5 84.9995 411.5 96.9995C495.5 106.599 551.833 82.3328 569.5 68.9994C663 -1.5665 799 -13.0001 857 15.9999C925 49.9999 1032.5 160 1284.5 93.0001" stroke="#9BA6EE"/>
        </svg>
    </section>
</main>

<?php get_footer(); ?>
