<div class="causes-s2-page">

    <?php
    $args = array(
        'post_type' => 'fundraise_type',
        'posts_per_page' => -1,
        'post_status' => 'publish'

    );
    $the_query = new WP_Query( $args );

    ?>

    <?php if ( $the_query->have_posts() ) : ?>

    <!-- start causes-s2 -->
    <section class="causes-s2 recent-causes section-padding">
        <div class="container">
            <div class="row section-title">
                <div class="col col-md-8 col-md-offset-2">
                    <p>Join Team Camfed today and help raise money to support girls' education in Africa. Whether you hold an event at school or work, take to the streets to run a marathon or fundraise with friends, there are lots of ways to get involved.</p>
                </div>
            </div> <!-- end section-title -->

            <div class="row causes-s2-grids">

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col col-xs-6">
                        <div class="grid">
                            <div class="img-goal-raised">

                                <div class="img-holder">

                                <?php
                                    if ( has_post_thumbnail() ) {
                                        the_post_thumbnail( 'fundraise-thumb', ['class' => 'img img-responsive'] );
                                    } else {
                                        echo '<img src="'. get_template_directory_uri(). '/assets/images/causes-s3/img-1.jpg" alt class="img img-responsive">';
                                    }

                                    ?>
                                </div>

                            </div>
                            <div class="causes-info">
                                <h3><a href="<?php the_permalink(); ?>">Fundraise at school</a></h3>
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div> <!-- end row -->

        </div> <!-- end container -->
    </section>
    <!-- end causes-s2 -->


    <?php endif; ?>

    <?php wp_reset_query(); ?>

</div>



