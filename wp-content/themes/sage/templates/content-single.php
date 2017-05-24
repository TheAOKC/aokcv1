<?php while (have_posts()) : the_post(); ?>
  <div class="container container-sm">
    <article <?php post_class(); ?>>
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>

      <?php if( has_post_thumbnail() ) : ?>
        <div class="entry-image">
          <?php the_post_thumbnail(); ?>
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


<div class="section section-resources">
  <div class="container">
    <div class="section-heading">
      <h3 class="section-title">Related Articles</h3>
    </div>
    <div class="section-body">
      <?php
      $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'post_status' => 'publish'
          //'cat'  => get_sub_field('recent_post_category')

      );
      $the_query = new WP_Query( $args );
      ?>

      <?php if ( $the_query->have_posts() ) : ?>
        <div class="row post-listing-holder" <?php the_sub_field('recent_post_category'); ?>>

          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="col-sm-4">
              <article class="post-block">
                <a href="<?php the_permalink(); ?>">
                  <span class="post-block-img">
                      <?php the_post_thumbnail('post-thumb'); ?>
                  </span>
                  <h2 class="post-block-title"><?php the_title(); ?></h2>
                </a>
                <div class="post-block-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incid ...</p>
                  <a class="btn btn-text" href="<?php the_permalink(); ?>">Learn more</a>
                </div>
              </article>
            </div>
          <?php endwhile; ?>

        </div>
      <?php endif; ?>

      <?php wp_reset_query(); ?>

      <?php if( get_sub_field('recent_post_button_label') ) : ?>
        <a href="<?php the_sub_field('recent_post_button_link'); ?>" class="btn btn-primary"><?php the_sub_field('recent_post_button_label'); ?></a>
      <?php endif; ?>
    </div>
  </div>
</div>
