<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rebuild
 */

?>

<section class="section_1 scroll-y">
    <div class="container">
        <p class="heading">
            <?php the_title(); ?>
        </p>

        <div class="content editor">
		    <?php the_content(); ?>
        </div>
    </div>
</section>
