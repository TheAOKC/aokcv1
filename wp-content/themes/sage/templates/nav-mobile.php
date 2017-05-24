<div class="mobile-nav-holder">
    <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
        <?php if( get_field('branding', 'option') ) : ?>
            <img src="<?php the_field('branding', 'option') ?>">
        <?php else: ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>">
        <?php endif; ?>
    </a>

    <?php
    if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'container' => false]);
    endif;
    ?>


    <a href="<?php the_permalink(0); ?>" class="btn btn-primary btn-sm" >Schedule an Appointment</a>


    <ul class="nav-footer">
        <li><a class="" href="#loginModal" data-toggle="modal"><i class="fa fa-lock"></i> Login</a></li>
        <?php if( get_field('default_phone_number', 'option') ) : ?>
            <li><a href="tel:<?php the_field('default_phone_number', 'option') ?>"><i class="fa fa-phone"></i> Call us</a></li>
        <?php endif; ?>
    </ul>

</div>