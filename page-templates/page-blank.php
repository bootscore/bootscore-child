<?php

/**
 * Template Name: Blank
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">

        <!-- Hook to add something nice -->
        <?php bs_after_primary(); ?>

        <main id="main" class="site-main">

            <div class="entry-content bg-white">
                <?php the_post(); ?>
                <?php the_content(); ?>
                <?php wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'bootscore'),
                    'after'  => '</div>',
                ));
                ?>
            </div>

        </main><!-- #main -->

    </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
