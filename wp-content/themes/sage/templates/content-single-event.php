
<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

      <?php if( has_post_thumbnail() ) : ?>
          <div class="entry-image">
              <?php the_post_thumbnail('large'); ?>
          </div>
      <?php endif; ?>

      <div class="event-details">
          <h2><?php the_title(); ?></h2>

          <?php the_content(); ?>

      </div>

      <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>

