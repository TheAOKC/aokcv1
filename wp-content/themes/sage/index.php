<?php get_template_part('templates/page', 'header'); ?>

<?php if( is_home() ) : ?>
  <div class="section section-intro">
    <div class="container">
      <div class="section-heading">
        <?php the_field('blog_intro', 'option');?>
      </div>
    </div>
  </div>
<?php endif;?>

<div class="section section-blog-listing">
  <div class="container">

    <div class="section-blog-heading">
      <div class="dropdown dropdown-blog-filter">
        <a href="#" id="dLabel" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-navicon"></i> Filter by category
        </a>
        <ul class="dropdown-menu" aria-labelledby="dLabel">
          <li>
            <a href="<?= esc_url(home_url('/')); ?>/blog">All Categories</a>
          </li>
          <?php wp_list_categories( array(
              'exclude'  => array( 4,7 ),
              'title_li' => ''
          ) ); ?>
        </ul>
      </div>
    </div>


    <?php if (!have_posts()) : ?>
      <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'sage'); ?>
      </div>
      <?php get_search_form(); ?>
    <?php endif; ?>

    <div class="row">
      <?php while (have_posts()) : the_post(); ?>

        <div class="col-sm-6 col-md-4">
          <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
        </div>

      <?php endwhile; ?>
    </div>

    <?php the_posts_navigation(); ?>
  </div>
</div>




<?php get_template_part('templates/layout-option', 'footer'); ?>