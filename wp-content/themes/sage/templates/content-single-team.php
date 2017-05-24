<?php while (have_posts()) : the_post(); ?>
  <div class="container">
    <article <?php post_class('about-single'); ?>>
      <div class="row">
        <div class="col-sm-4">
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="about-img">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php endif; ?>
          <ul class="about-list-info">
            <li>
              <h4>Email address:</h4>
              <span><?php the_field('ad_email'); ?></span>
            </li>
            <li>
              <h4>Phone number:</h4>
              <span><?php the_field('ad_phone'); ?></span>
            </li>
          </ul>
        </div>
        <div class="col-sm-8">
          <div class="post-body">
            <h1 class="about-title"><?php the_title(); ?></h1>
            <h5 class="about-position"><?php the_field('ad_position'); ?></h5>

            <div class="about-copy">
              <?php
              $get_the_title = get_the_title();
              $get_the_title_arr = explode(' ',trim($get_the_title));
              ?>
              <h5 class="about-sub-title">About <?php echo $get_the_title_arr[0]; ?></h5>

              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>

    </article>
  </div>

  <?php get_template_part('templates/layout', 'builder'); ?>

  <?php get_template_part('templates/layout-option', 'footer'); ?>

<?php endwhile; ?>
