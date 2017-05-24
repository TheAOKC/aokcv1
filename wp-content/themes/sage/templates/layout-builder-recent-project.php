<!-- start causes-s3 -->
<section class="causes-s3 section-padding">
    <div class="container">
        <div class="section-title">
            <h2>Our Projects</h2>
        </div>


        <?php
        $args = array(
            'post_type' => 'project',
            'posts_per_page' => get_sub_field('recent_post_limit'),
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
                                    <span>$50,000</span>
                                </div>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="btn theme-btn">Make an Impact</a>
                        </div>

                    </div>
                <?php endwhile; ?>

            </div> <!-- end row -->

        <?php endif; ?>

        <?php wp_reset_query(); ?>

        <?php $recent_vlink = get_sub_field('recent_vlink'); ?>
        <?php if( $recent_vlink["title"] ) : ?>
            <a href="<?php echo $recent_vlink["url"]; ?>" class="btn btn-primary" target="<?php echo $recent_vlink["target"]; ?>"><?php echo $recent_vlink["title"]; ?></a>
        <?php endif; ?>

    </div> <!-- end container -->
</section>
<!-- end causes-s3 -->