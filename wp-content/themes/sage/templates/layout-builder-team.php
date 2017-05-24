<section class="volunteers section-padding">
    <div class="container">
        <div class="row section-title">
            <div class="col col-md-8 col-md-offset-2">
                <h2>The people who make it happen</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            </div>
        </div> <!-- end section-title -->


        <?php
        $args = array(
            'post_type' => 'team_type',
            'posts_per_page' => -1,
            'post_status' => 'publish'

        );
        $the_query = new WP_Query( $args );

        ?>

        <?php if ( $the_query->have_posts() ) : ?>
        <?php $countID = 0; ?>
        <div class="row volunteers-grids">
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $countID++; ?>

                <div class="col col-md-3 col-xs-4">
                    <div class="grid">
                        <a href="#countID-<?php echo $countID; ?>">
                            <div class="img-holder">
                                <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'avatar-thumb', ['class' => 'img img-responsive'] );
                                } else {
                                    echo '<img src="'. get_template_directory_uri(). '/assets/images/causes-s3/img-1.jpg" alt class="img img-responsive">';
                                }

                                ?>
                            </div>
                            <div class="volunteers-details">
                                <h4><?php the_title(); ?></h4>
                                <span class="volunteers-post"><?php the_field('team_position'); ?></span>
                            </div>
                        </a>
                    </div>
                </div>

            <?php endwhile; ?>

        </div> <!-- end row -->



        <?php wp_reset_query(); ?>


        <hr>
        <div class="row mt-40px">
            <div class="col-md-7 col-md-offset-2">

                <div class="team-list-details">
                    <?php $countID = 0; ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); $countID++; ?>

                        <div id="countID-<?php echo $countID; ?>" class="media">
                            <div class="media-left">
                                <img src="//images.contentful.com/wcneouoynfwj/UvKiPLs6C4UCeCg6GCc66/37b210a910930a642beed9dcc63dc757/fernie.jpg?w=100&amp;h=100" class="media-object avatar">
                            </div>
                            <div class="media-body">
                                <h2><?php the_title(); ?></h2>
                                <h4><?php the_field('team_position'); ?></h4>
                                <?php the_content(); ?>

                                <?php if( have_rows('social_media') ): ?>
                                    <ul class="social-links">
                                        <?php while( have_rows('social_media') ): the_row(); ?>
                                            <?php $social_media_type = get_sub_field('social_media_type'); ?>
                                            <?php $social_media_link = get_sub_field('social_media_link'); ?>

                                            <li>
                                                <a href="<?php echo $social_media_link["url"]; ?>" target="<?php echo $social_media_link["target"]; ?>">
                                                    <i class="fa fa-<?php echo $social_media_type; ?>"></i>
                                                </a>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>

                    <?php endwhile; ?>


                </div>



                <?php wp_reset_query(); ?>

            </div>
        </div>

        <?php endif; ?>

    </div> <!-- end container -->
</section>
<!-- end volunteers-->
