<?php while (have_posts()) : the_post(); ?>

  <div class="section section-intro">
    <div class="container">
      <div class="section-heading">
        <h3 class="section-title"><?php the_title(); ?></h3>
        <?php the_content(); ?>
      </div>
    </div>
  </div>


  <?php if( have_rows('sub_process') ): ?>

    <div class="section section-process">
      <div class="container">
        <div class="f-block-single-heading"></div>

          <div class="f-block-single-holder">
            <?php while( have_rows('sub_process') ): the_row();

              // vars
              $sub_process_title = get_sub_field('sub_process_title');
              $sub_process_content = get_sub_field('sub_process_content');
              $sub_process_icon = get_sub_field('sub_process_icon');

            ?>

              <div class="f-block-single">
                <div class="f-block-heading">
                  <?php if( get_sub_field('sub_process_icon_type') == "Default" ) : ?>
                    <span class="f-block-icon">
                        <?php if( $sub_process_icon == 'Foundation' ) : ?>
                          <i class="icon icon-oup-dialog"></i>
                        <?php elseif( $sub_process_icon == 'Arrowup' ) : ?>
                          <i class="icon icon-oup-arrowup"></i>
                        <?php elseif( $sub_process_icon == 'Navigate' ) : ?>
                          <i class="icon icon-oup-navigate"></i>
                        <?php elseif( $sub_process_icon == 'Activate' ) : ?>
                          <i class="icon icon-oup-activator"></i>
                        <?php elseif( $sub_process_icon == 'Check' ) : ?>
                          <i class="icon icon-oup-inspection"></i>
                        <?php else : ?>
                          <i class="icon icon-oup-dialog"></i>
                        <?php endif; ?>
                    </span>
                  <?php elseif( get_sub_field('sub_process_icon_type') == "Upload Icon"  ): ?>
                    <span class="f-block-icon">
                        <img src="<?php the_sub_field('sub_process_icon_img'); ?>" alt="">
                    </span>
                  <?php endif; ?>
                  <h5 class="f-block-label"><?php the_sub_field('sub_process_stitle'); ?></h5>
                  <h3 class="f-block-title"><?php echo $sub_process_title; ?></h3>
                </div>
                <p><?php echo $sub_process_content; ?></p>
              </div>

            <?php endwhile; ?>

          </div>
      </div>
    </div>

  <?php endif; ?>

  <?php get_template_part('templates/layout', 'builder'); ?>

  <?php get_template_part('templates/layout-option', 'footer'); ?>

<?php endwhile; ?>
