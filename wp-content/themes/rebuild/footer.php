<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rebuild
 */
?>

<footer>
    <?php if ( ! is_page_template('page-templates/page-contact.php') ) : ?>
        <div class="container">
            <div class="row block_1 scroll-y">
                <div class="column">
                    <p class="heading">Contacts</p>
                    <div class="svg_warp">
                        <div class='half-circle half-circle-1 red md'></div>
                        <div class='half-circle half-circle-2 yellow md'></div>
                    </div>
                </div>

                <div class="column">
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
                    <?php wp_nav_menu([
                        'theme_location'  => 'menu-primary',
                        'menu_id'         => 'footer-menu',
                        'container'       => false,
                        'menu_class'      => ''
                    ]) ?>
                </div>

                <div class="column">
                    <?php rebuild_socials_buttons(); ?>

                    <?php rebuild_donate_button(); ?>
                </div>

            </div>
        </div>
    <?php endif; ?>

    <div class="row block_3">
        <dov class="container">
            <p>© 2022 All rights reserved </p>
            <a href="<?php echo get_privacy_policy_url(); ?>">Privacy Policy</a>
        </dov>
    </div>

</footer>

<div class="popup">
    <section class="decoration_bg scroll-y">
        <div class="container">
            <svg class="svg_icon svg_bird">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg_map.svg#svg_bird" />
            </svg>
            <p class="heading">thank you for the application</p>
            <p class="subtitle_3">We will contact you soon</p>
        </div>
    </section>
</div>

<!-- custom cursor -->
<div class="cursor"></div>

<?php wp_footer(); ?>

</body>
</html>
