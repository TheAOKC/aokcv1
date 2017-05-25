<section class="main-body">
  <?php while (have_posts()) : the_post(); ?>
    <div class="container container-sm">
      <article <?php post_class(); ?>>

        <?php if( is_singular('post') ) : ?>
          <header>
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <?php get_template_part('templates/entry-meta'); ?>
          </header>
        <?php endif; ?>

        <?php if( has_post_thumbnail() ) : ?>
          <div class="entry-image">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>

        <div class="entry-content">
          <?php the_content(); ?>
        </div>
        <footer>
          <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
        </footer>
        <?php comments_template('/templates/comments.php'); ?>
      </article>
    </div>
  <?php endwhile; ?>
</section>
