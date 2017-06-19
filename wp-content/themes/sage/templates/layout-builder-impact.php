<?php if( get_sub_field('impact_listing_type') == 'Featured' ) : ?>
    <div class="to-change-section">

        <?php if( get_sub_field('impact_title') ) : ?>
            <div class="section-title">
                <h2><?php the_sub_field('impact_title'); ?></h2>
            </div>
        <?php endif; ?>



        <?php
        $args = array('type' => 'impacts', 'taxonomy' => 'impact_category');


        $categories = get_categories($args);
        ?>



            <div class="to-change-holder clearfix">
                <ul>
                    <?php foreach($categories as $category) : ?>

                        <li>


                            <a href="<?php echo get_term_link($category->term_id); ?>" style="background-image: url(<?php echo z_taxonomy_image_url($category->term_id); ?>)">
                                <span></span>
                                <div class="tch-content">
                                    <h3><?php echo $category->name ?></h3>
                                    <?php echo category_description( $category->term_id ); ?>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>


                    <?php wp_reset_query(); ?>
                </ul>
            </div>


    </div>

<?php elseif( get_sub_field('impact_listing_type') == 'Listing' ) : ?>
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
                        'post_type' => 'impacts',
                        'posts_per_page' => -1,
                        'post_status' => 'publish'

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
                                <?php the_post_thumbnail(); ?>
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
