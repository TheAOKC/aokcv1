<?php if( get_sub_field('impact_listing_type') == 'Featured' ) : ?>


    <?php
    $args = array(
        'post_type' => 'impact_type',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'impact_categories'  => 'on-going'

    );
    $the_query = new WP_Query( $args );
    ?>

    <?php if ( $the_query->have_posts() ) : ?>
    <div class="to-change-section">
        <div class="section-title">
            <h2>What we want to change</h2>
        </div>

        <div class="to-change-holder clearfix">
            <ul>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>

                    <li>
                        <a href="<?php the_permalink(); ?>" style="background-image: url('<?php echo the_post_thumbnail_url('full'); ?>');">
                            <span></span>
                            <h3><?php the_title(); ?></h3>
                        </a>
                    </li>
                <?php endwhile; ?>


                <?php wp_reset_query(); ?>
            </ul>
        </div>
    </div>



    <?php endif; ?>

<?php elseif( get_sub_field('impact_listing_type') == 'Listing' ) : ?>
    <?php
    $args = array(
        'post_type' => 'impact_type',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'impact_categories'  => 'on-going'

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
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <?php the_excerpt(); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div> <!-- end row -->

                <div class="row section-title mt-40px">
                    <div class="col col-md-8 col-md-offset-2">
                        <h3>Old Projects</h3>
                    </div>
                </div> <!-- end section-title -->

                <div class="s-block">

                    <?php
                    $args = array(
                        'post_type' => 'impact_type',
                        'posts_per_page' => -1,
                        'post_status' => 'publish',
                        'impact_categories'  => 'past'

                    );
                    $the_query = new WP_Query( $args );
                    ?>

                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="row ">
                            <div class="col-sm-4">
                                <div class=" s-item-text-group half-offset-right">
                                    <div class="s-item-title">
                                        <div class="s-component s-text">
                                            <h3 class="s-component-content s-font-heading"><?php the_title(); ?></h3>
                                        </div>
                                    </div>
                                    <div class="s-component-content s-font-body">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8 s-block-feature">
                                <img src="http://res.cloudinary.com/hrscywv4p/image/upload/c_limit,fl_lossy,h_9000,w_1200,f_auto,q_auto/v1/792431/EPA_image_for_homepage_yvo1rj.jpg" alt="">
                            </div>
                        </div>
                    <?php endwhile; ?>


                </div>

            </div> <!-- end container -->
        </section>
        <!-- end causes-s2 -->


    <?php endif; ?>

    <?php wp_reset_query(); ?>

<?php endif; ?>
