<!-- start page-wrapper -->
<div class="page-wrapper">

    <!-- start preloader -->
    <div class="preloader" style="display:none;">
        <div>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- end preloader -->

    <!-- Start header -->
    <header class="site-header header-style3">
        <!-- navigation -->
        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
                        <?php if( get_field('branding', 'option') ) : ?>
                            <img src="<?php the_field('branding', 'option') ?>">
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-2.png" alt="<?php bloginfo('name'); ?>">
                        <?php endif; ?>
                    </a>

                </div>

                <div id="navbar" class="navbar-collapse collapse navigation-menu-holder navbar-right">
                    <button class="close-navbar"><i class="fa fa-close"></i></button>

                        <?php
                        if (has_nav_menu('primary_navigation')) :
                            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'container' => false]);
                        endif;
                        ?>
                </div><!-- end of nav-collapse -->

            </div><!-- end of container -->
        </nav> <!-- end navigation -->
    </header>
    <!-- end of header -->
