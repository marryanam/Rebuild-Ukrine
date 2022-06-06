<?php
/**
 * Features-block for gutenberg
 */
?>

<div class="insert_section scroll-y">
    <?php if (have_rows('results')) : ?>
    <?php while (have_rows('results')) : the_row(); ?>

        <div class="item">
            <p class="heading">
                <?php printf(
                '<span>%s</span>%s',
                    extract_number( get_sub_field('number') ),
                    extract_text( get_sub_field('number') )
                ); ?>
            </p>
            <p class="subtitle_1"><?php the_sub_field('title'); ?></p>
        </div>

    <?php endwhile; ?>
    <?php endif; ?>
</div>
