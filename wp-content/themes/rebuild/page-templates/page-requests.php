<?php/** * Template name: Requests */?><?php get_header(); ?><main class="page-wrapper requests_page">    <section class="scroll-y">        <svg  class="scroll-y scrolling-svg" width="364" height="444" viewBox="0 0 364 444" fill="none" xmlns="http://www.w3.org/2000/svg">            <path  class="scrolling-path" d="M1 1C157.227 20.066 185.993 93.9374 178.575 138.559C174.275 164.421 160.5 180 153.5 173.5C135.335 156.633 274.682 95.9546 353.203 193.094C387.576 235.618 424.077 377.777 379.052 443" stroke="#9BA6EE" stroke-linecap="round" stroke-linejoin="round"/>        </svg>        <div class="container">            <div class="row block_1">                <div class="heading animated_title"> <p class="t1">                  <?php the_title(); ?>          </p>      </div>                <div class="desc textShowUp">                    <?php the_content(); ?>                </div>            </div>            <div class="row block_2" id="filterData">                <?php the_post_loop([                    'post_type' => 'request'                ]); ?>            </div>            <?php rebuild_load_more_button(); ?>        </div>        <?php if ( $wp_query->max_num_pages > 1 ) : ?>            <svg class="scroll-y scrolling-svg scrolling-svg-2" id="loadMoreLine" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 228" fill="none">                <path class="scrolling-path" d="M0 201.424C53.7409 216.583 234.257 257.569 409.5 184.002C520.572 137.373 549.723 48.9732 534.5 29.5016C519.851 10.764 492.304 48.0337 624.313 91.5144C756.322 134.995 877.854 60.4567 995.195 14.9055C1112.54 -30.6458 1303.23 51.7245 1496 74.5001C1659.43 93.8084 1850.5 70.6199 1920 12.5446" stroke="#9BA6EE" stroke-linecap="round" stroke-linejoin="round"/>            </svg>        <?php endif; ?>    </section></main><?php get_footer(); ?>