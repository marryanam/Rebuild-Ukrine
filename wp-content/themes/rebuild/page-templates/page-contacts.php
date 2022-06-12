<?php
/**
 * Template name: Contacts
 */
?>

<?php get_header(); ?>

<main class="page-wrapper contacts-page">

    <section class="section_1 scroll-y">
        <div class="container">
            <div class="row block_1">
                <div class="column">
                    <div class="heading animated_title">
                        <p class="t1"><?php the_title(); ?></p>
                    </div>

                    <div class="group">
                        <svg class="svg_icon svg_phone">
                            <use xlink:href="<?php echo get_template_directory_uri();  ?>/img/svg_map.svg#svg_phone" />
                        </svg>
                        <a href="tel:<?php the_field('phone', 'contact'); ?>" class="subtitle_1">
                            <?php the_field('phone', 'contact'); ?>
                        </a>
                    </div>

                    <div class="group">
                        <svg class="svg_icon svg_email">
                            <use xlink:href="<?php echo get_template_directory_uri();  ?>/img/svg_map.svg#svg_email" />
                        </svg>
                        <a href="mailto:<?php the_field('email', 'contact'); ?>"class="subtitle_1">
                            <?php the_field('email', 'contact'); ?>
                        </a>
                    </div>

                    <div class="group">
                        <svg class="svg_icon svg_adress">
                            <use xlink:href="<?php echo get_template_directory_uri();  ?>/img/svg_map.svg#svg_adress" />
                        </svg>
                        <span class="subtitle_1">
                            <?php the_field('address', 'contact'); ?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row block_2">
                <div class="column">
                    <?php rebuild_socials_buttons(); ?>

                    <?php rebuild_donate_button(); ?>
                </div>
            </div>
        </div>

        <div class="map">
            <?php the_field('map', 'contact'); ?>
        </div>
    </section>

    <section class="section_2 scroll-y">
        <div class="container">
            <div class="column">
                <p class="heading">contact </br> us</p>
                <p class="subtitle_3">Contact us if you have any questions</p>
                <svg class="svg_icon svg_branch">
                    <use xlink:href="<?php echo get_template_directory_uri();  ?>/img/svg_map.svg#svg_branch" />
                </svg>
            </div>

            <div class="column">
                <?php echo do_shortcode( get_field('form', 'contact') ); ?>
            </div>
        </div>
        <svg class="scroll-y scrolling-svg scrolling-svg-2 enter" id="loadMoreLine" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 228" fill="none">                <path class="scrolling-path" d="M0 201.424C53.7409 216.583 234.257 257.569 409.5 184.002C520.572 137.373 549.723 48.9732 534.5 29.5016C519.851 10.764 492.304 48.0337 624.313 91.5144C756.322 134.995 877.854 60.4567 995.195 14.9055C1112.54 -30.6458 1303.23 51.7245 1496 74.5001C1659.43 93.8084 1850.5 70.6199 1920 12.5446" stroke="#9BA6EE" stroke-linecap="round" stroke-linejoin="round"></path>            </svg>
    </section>

</main>

<?php get_footer(); ?>
