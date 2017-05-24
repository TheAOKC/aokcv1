<?php get_template_part('templates/page', 'header'); ?>

<?php if( is_singular('team') ) : ?>
    <?php get_template_part('templates/content-single', 'team'); ?>
<?php else: ?>
    <?php get_template_part('templates/content-single', get_post_type()); ?>
<?php endif; ?>
