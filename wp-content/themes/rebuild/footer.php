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
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg_map.svg#svg_phone" />
                    </svg>
                    <a href="tel:2139266627" class="subtitle_1">213 926-6627</a>
                </div>
                <div class="group">
                    <svg class="svg_icon svg_email">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg_map.svg#svg_email" />
                    </svg>
                    <a href="mailto:support@shellholster.com" class="subtitle_1">info@rebuildukraine.org</a>
                </div>
                <div class="group">
                    <svg class="svg_icon svg_adress">
                        <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg_map.svg#svg_adress" />
                    </svg>
                    <span class="subtitle_1">310 Hampton Rd, Hatboro, PA 19040</span>
                </div>
            </div>
        </div>

            <div class="row block_2">
                <div class="column">
                    <ul>
                        <li><a href="/">Who we are</a></li>
                        <li><a href="/">Requests</a></li>
                        <li><a href="/">Results</a></li>
                        <li><a href="/">Partners</a></li>
                        <li><a href="/">Contacts</a></li>
                    </ul>
                </div>

                <div class="column">
                    <div class="social">
                        <a href="#">
                            <svg class="svg_icon svg_social">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg_map.svg#svg_fb" />
                            </svg>
                        </a>
                        <a href="#">
                            <svg class="svg_icon svg_social">
                                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg_map.svg#svg_twitter" />
                            </svg>
                        </a>
                    </div>
                    <div class="btn-primary">
                        <svg class="svg_icon btn_svg_1">
                            <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg_map.svg#btn_svg_1" />
                        </svg>
                        <span>Donate</span>
                    </div>
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
