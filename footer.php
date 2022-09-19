<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.2.0.0
 */

?>

<footer>

    <div class="bootscore-footer text-light bg-dark pt-5 pb-3">
        <div class="container">

            <!-- Top Footer Widget -->
            <?php if (is_active_sidebar('top-footer')) : ?>
                <div>
                    <?php dynamic_sidebar('top footer'); ?>
                </div>
            <?php endif; ?>

            <div class="row">

                <!-- Footer 1 Widget -->
                <div class="col-md-6 col-lg-4">
                    <?php if (is_active_sidebar('footer-1')) : ?>
                        <div>
                            <?php dynamic_sidebar('footer-1'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Footer 2 Widget -->
                <div class="col-md-6 col-lg-4">
                    <?php if (is_active_sidebar('footer-2')) : ?>
                        <div>
                            <?php dynamic_sidebar('footer-2'); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Footer 3 Widget -->
                <div class="col-md-6 col-lg-4">
                    <?php if (is_active_sidebar('footer-3')) : ?>
                        <div>
                            <?php dynamic_sidebar('footer-3'); ?>
                        </div>
                    <?php endif; ?>
                </div>

            </div>

        </div>
    </div>

    <div class="bootscore-info bg-dark text-muted border-top py-2 text-center">
        <div class="container">
            <!-- Bootstrap 5 Nav Walker Footer Menu -->
            <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="footer-menu" class="navbar navbar-dark justify-content-center %2$s">%3$s</ul>',
                'depth' => 1,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
            <!-- Bootstrap 5 Nav Walker Footer Menu End -->
            <small class="text-light">&copy;&nbsp;<?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></small>
        </div>
    </div>

</footer>

<!-- To top button -->
<a href="#" class="btn btn-primary shadow top-button position-fixed zi-1020"><i class="fa-solid fa-chevron-up"></i><span class="visually-hidden-focusable">To top</span></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>