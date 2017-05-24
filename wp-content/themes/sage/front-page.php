<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <div class="page-main-content">
    <?php get_template_part('templates/content', 'front'); ?>
  </div>

<?php endwhile; ?>
