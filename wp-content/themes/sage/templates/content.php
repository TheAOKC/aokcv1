<article <?php post_class('post-block'); ?>>
  <a href="<?php the_permalink(); ?>">
    <span class="post-block-img"><?php the_post_thumbnail('post-thumb'); ?></span>
    <h2 class="post-block-title"><?php the_title(); ?></h2>
  </a>
  <div class="post-block-body">
    <p><?php the_excerpt(); ?></p>
    <a class="btn btn-text" href="<?php the_permalink(); ?>">Learn more</a>
  </div>
</article>