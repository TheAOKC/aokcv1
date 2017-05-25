<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

  <div class="page-main-content">
    <?php get_template_part('templates/content', 'page'); ?>

    <div class="container container-sm">
      <?php  if( '' !== get_post()->post_content ) : ?>
          <div class="section-padding">
          <?php the_content(); ?>
          </div>

      <?php endif; ?>
    </div>
  </div>

<?php endwhile; ?>
