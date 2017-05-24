<?php
/**
 * Template Name: Layout Builder
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/layout', 'builder'); ?>

  <?php get_template_part('templates/layout-option', 'footer'); ?>
<?php endwhile; ?>
