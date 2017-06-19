<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

    <section class="page-title-wrapper">
        <div class="page-title" style="background-image: url(<?php echo z_taxonomy_image_url($term->term_id); ?>)">
            <h1><?php echo $term->name; ?></h1>
        </div>
    </section>


    <section class="causes-s2 impact-list section-padding">
        <div class="container">

            <?php
            $args = array(
                'post_type' => 'impacts',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'impact_status'  => 'on-going',
                'impact_category'  => $term->slug,

            );
            $the_query = new WP_Query( $args );
            ?>

            <?php if ( $the_query->have_posts() ) : ?>

                <div class="row section-title ">
                    <div class="col col-md-8 col-md-offset-2">
                        <h3>On Going projects</h3>
                    </div>
                </div>

                <div class="s-block">


                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="row causes">
                            <div class="col-sm-4">
                                <div class=" s-item-text-group half-offset-right">
                                    <div class="s-item-title">
                                        <div class="s-component s-text">
                                            <h3 class="s-component-content s-font-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </div>
                                    </div>
                                    <div class="s-component-content s-font-body">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="goal-raised">
                                        <div class="progress">
                                            <?php
                                            //$donationpercent = ( get_field('project_raised') - get_field('project_goal') ) /  100%;
                                            $donationpercent = 90;
                                            ?>
                                            <div class="progress-bar progress-bar-s2  appeared" data-percent="<?php echo $donationpercent; ?>" style="width: <?php echo $donationpercent; ?>%;"><span><?php echo $donationpercent; ?>%</span></div>
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

                                    <a href="<?php the_field('donate_link', 'option'); ?>" class="btn theme-btn-s3" target="_blank">Donate</a>
                                </div>


                            </div>

                            <div class="col-sm-8 s-block-feature">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>


                </div>

            <?php endif; ?>

            <?php wp_reset_query(); ?>


        </div>
    </section>

    <section class="causes-s2 impact-list-2 section-padding">
        <div class="container">
            <?php
            $args = array(
                'post_type' => 'impacts',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'impact_status'  => 'completed',
                'impact_category'  => $term->slug

            );
            $the_query = new WP_Query( $args );
            ?>

            <?php if ( $the_query->have_posts() ) : ?>


                <div class="row section-title mt-40px">
                    <div class="col col-md-8 col-md-offset-2">
                        <h3>Completed projects</h3>
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

                </div>

            <?php endif; ?>

            <?php wp_reset_query(); ?>


        </div>
    </section>




<?php get_template_part('templates/layout-option', 'footer'); ?>