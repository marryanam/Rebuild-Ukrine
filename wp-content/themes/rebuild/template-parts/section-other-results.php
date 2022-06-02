<?php
/**
 * Template part for displaying section with other results loop
 */
?>

<section class="section_3 slider_1 scroll-y">
    <div class="container">
        <div class="heading_wrap">
            <p class="heading">Other results</p>
            <div class="swiper_buttons slider-blog_btns">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>

    <div class="swiper-container swiper slider-blog">
        <div class="swiper-wrapper">

            <?php the_post_loop([
                'post_type'     => 'result',
                'post__not_in'  => [ get_the_ID() ]
            ],true); ?>

        </div>
    </div>

    <div class="btn-primary">
        <span>All results</span>
    </div>
</section>
