<?php if( get_sub_field('project_listing_display') == 'Recent' ) : ?>

<section class="causes-s3 home-project section-padding" style="background-image:url(<?php the_sub_field('project_background'); ?>);">
    <div class="container">
        <div class="section-title">
            <h2><?php the_sub_field('project_post_title'); ?></h2>
            <?php the_sub_field('recent_post_description'); ?>
        </div>

        <?php
        $args = array(
            'post_type' => 'project',
            'posts_per_page' => get_sub_field('project_post_limit'),
            'post_status' => 'publish'

        );
        $the_query = new WP_Query( $args );

        ?>

        <?php if ( $the_query->have_posts() ) : ?>

            <div class="causes-s3-grids causes-s3-slider carousel-dots-with-nav">

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="grid">
                        <div class="img-holder">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/images/causes-s3/img-1.jpg" class="fancybox"><i class="fa fa-link"></i></a>
                            <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'project-thumb', ['class' => 'img img-responsive'] );
                            } else {
                                echo '<img src="'. get_template_directory_uri(). '/assets/images/causes-s3/img-1.jpg" alt class="img img-responsive">';
                            }

                            ?>
                        </div>
                        <div class="details">

                            <div class="meter-3" data-value="0.65">
                                <span></span>
                            </div>

                            <h3><a href="#"><?php the_title(); ?></a></h3>
                            <?php the_excerpt(); ?>

                            <div class="goal-raised">
                                <div>
                                    <h4>Raised</h4>
                                    <span>$<?php the_field('project_raised');?></span>
                                </div>
                                <div>
                                    <h4>Goal</h4>
                                    <span>$<?php the_field('project_goal');?></span>
                                </div>
                            </div>

                            <a href=https://www.nowdonate.com/checkout/b448w5mw8m3ko06i8oy4" class="btn theme-btn" target="_blank">Make an Impact</a>
                        </div>

                    </div>
                <?php endwhile; ?>

            </div>

        <?php endif; ?>



        <?php $recent_vlink = get_sub_field('recent_vlink'); ?>
        <?php if( $recent_vlink["title"] ) : ?>
            <a href="<?php echo $recent_vlink["url"]; ?>" class="btn btn-primary" target="<?php echo $recent_vlink["target"]; ?>"><?php echo $recent_vlink["title"]; ?></a>
        <?php endif; ?>

        <?php wp_reset_query(); ?>

    </div>
</section>


<?php elseif( get_sub_field('project_listing_display') == 'Full' ) : ?>

    <div class="causes-page project-page">


        <!-- start causes -->
        <section class="causes">

            <div class="container">

                <div class="row section-title">
                    <div class="col col-md-8 col-md-offset-2">
                        <h3><?php the_sub_field('project_post_title'); ?></h3>
                        <?php the_sub_field('recent_post_description'); ?>
                    </div>
                </div>


                <?php
                $args = array(
                    'post_type' => 'project',
                    'posts_per_page' => -1,
                    'post_status' => 'publish'

                );
                $the_query = new WP_Query( $args );

                ?>

                <?php if ( $the_query->have_posts() ) : ?>

                    <div class="row content">

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col col-md-4 col-xs-6">
                            <div class="grid">
                                <div class="img-holder">
                                    <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'project-thumb', ['class' => 'img img-responsive'] );
                                    } else {
                                        echo '<img src="'. get_template_directory_uri(). '/assets/images/causes-s3/img-1.jpg" alt class="img img-responsive">';
                                    }

                                    ?>
                                </div>
                                <div class="goal-raised">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-s2 " data-percent="85"></div>
                                    </div>

                                    <div class="goal-raised-inner">
                                        <div class="raised">
                                            <h4>Raised: <span>$<?php the_field('project_raised');?></span></h4>
                                        </div>
                                        <div class="goal">
                                            <h4>Goals: <span>$<?php the_field('project_goal');?></span></h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="causes-title">
                                    <h3><a href="#"><?php the_title(); ?></a></h3>
                                </div>
                                <div class="causes-details">
                                    <p>Perspiciatis unde omnis iste natus error sit volupta tem accusantium doloremque laudantium. </p>
                                    <a href="https://www.nowdonate.com/checkout/b448w5mw8m3ko06i8oy4" class="btn theme-btn-s3" target="_blank">Donate</a>
                                </div>
                            </div>
                        </div>

                        <?php endwhile; ?>

                    </div>

                <?php endif; ?>

                <?php wp_reset_query(); ?>

            </div>
        </section>
        <!-- end causes -->

    </div>


<?php endif; ?>