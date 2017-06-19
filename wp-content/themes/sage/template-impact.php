<?php
/**
 * Template Name: Impact Listing
 * Template Post Type: impacts
 */
?>

<?php get_template_part('templates/page', 'header'); ?>

  <?php
  $args = array(
      'post_type' => 'impacts',
      'posts_per_page' => -1,
      'post_status' => 'publish'

  );
  $the_query = new WP_Query( $args );
  ?>

  <?php if ( $the_query->have_posts() ) : ?>

    <!-- start causes-s2 -->
    <section class="causes-s2 impact-list section-padding">
      <div class="container">
        <div class="row section-title">
          <div class="col col-md-8 col-md-offset-2">
            <h3>On-going projects</h3>
            <p>Join Team Camfed today and help raise money to support girls' education in Africa. Whether you hold an event at school or work, take to the streets to run a marathon or fundraise with friends, there are lots of ways to get involved.</p>
          </div>
        </div> <!-- end section-title -->

        <div class="s-block">

          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="row ">
              <div class="col-sm-4">
                <div class=" s-item-text-group half-offset-right">
                  <div class="s-item-title">
                    <div class="s-component s-text">
                      <h3 class="s-component-content s-font-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                  </div>
                  <div class="s-component-content s-font-body">
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>

              <div class="col-sm-8 s-block-feature">
                <?php the_post_thumbnail(); ?>
              </div>
            </div>
          <?php endwhile; ?>

        </div> <!-- end row -->


      </div> <!-- end container -->


    </section>
    <!-- end causes-s2 -->


  <?php endif; ?>

  <?php wp_reset_query(); ?>

