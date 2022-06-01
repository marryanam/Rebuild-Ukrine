<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rebuild
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <div class="container">

        <div class="burger">
            <svg class="svg_icon svg_burger">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg_map.svg#svg_burger" />
            </svg>
            <svg class="svg_icon svg_burger_close">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg_map.svg#svg_burger_close" />
            </svg>
        </div>

        <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="#"  title="#" class="logo_desktop"/>
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_2.svg" alt="#"  title="#" class="logo_mobile"/>
        </a>

        <div class="menu">
            <?php wp_nav_menu([
                'theme_location'  => 'menu-primary',
                'menu_id'         => 'primary-menu',
                'container'       => false,
                'menu_class'      => ''
            ]) ?>

            <div class='half-circle-1 red'></div>
            <div class='half-circle-2 yellow'></div>

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
        </div>

        <div class="btn-primary">
            <svg class="svg_icon btn_svg_1">
                <use xlink:href="<?php echo get_template_directory_uri(); ?>/img/svg_map.svg#btn_svg_1" />
            </svg>
            <span>Donate</span>
        </div>

    </div>
</header>
