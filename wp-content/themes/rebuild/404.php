<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package rebuild
 */
?>

<?php get_header(); ?>

<main class="page-wrapper page-404">

    <section class="decoration_bg scroll-y">
        <div class="container">
            <svg class="svg_icon svg_bird">
                <use xlink:href="<?php echo get_template_directory_uri();  ?>/img/svg_map.svg#svg_bird" />
            </svg>
            <p class="heading">404</p>
            <p class="subtitle_3">Page was not found</p>
            <a href="<?php echo home_url(); ?>" class="btn-primary">
                <svg class="svg_icon btn_svg_1">
                    <use xlink:href="<?php echo get_template_directory_uri();  ?>/img/svg_map.svg#btn_svg_1" />
                </svg>
                <span>Go home</span>
            </a>
        </div>
    </section>

</main>

<?php get_footer(); ?>
