<?php
/**
 * Template Name: Impact
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>

    <div class="causes-s2-page">

    <!-- start causes-s2 -->
    <section class="causes-s2 recent-causes section-padding">
        <div class="container">
            <div class="row section-title">
                <div class="col col-md-8 col-md-offset-2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                </div>
            </div> <!-- end section-title -->

            <div class="row causes-s2-grids">
                <div class="col col-lg-4 col-xs-6">
                    <div class="grid">
                        <div class="img-goal-raised">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/causes-s2/img-4.jpg" alt class="img img-responsive">
                            </div>

                        </div>
                        <div class="causes-info">
                            <h3><a href="#">Disaster Relief</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-xs-6">
                    <div class="grid">
                        <div class="img-goal-raised">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/causes-s2/img-4.jpg" alt class="img img-responsive">
                            </div>

                        </div>
                        <div class="causes-info">
                            <h3><a href="#">Medical</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-xs-6">
                    <div class="grid">
                        <div class="img-goal-raised">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/causes-s2/img-4.jpg" alt class="img img-responsive">
                            </div>

                        </div>
                        <div class="causes-info">
                            <h3><a href="#">Education</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-xs-6">
                    <div class="grid">
                        <div class="img-goal-raised">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/causes-s2/img-4.jpg" alt class="img img-responsive">
                            </div>

                        </div>
                        <div class="causes-info">
                            <h3><a href="#">Child Trafficking</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-xs-6">
                    <div class="grid">
                        <div class="img-goal-raised">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/causes-s2/img-4.jpg" alt class="img img-responsive">
                            </div>

                        </div>
                        <div class="causes-info">
                            <h3><a href="#">Child Trafficking</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-xs-6">
                    <div class="grid">
                        <div class="img-goal-raised">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/causes-s2/img-4.jpg" alt class="img img-responsive">
                            </div>

                        </div>
                        <div class="causes-info">
                            <h3><a href="#">Child Trafficking</a></h3>
                        </div>
                    </div>
                </div>

            </div> <!-- end row -->

            <div class="load-more">
                <a href="#" class="btn theme-btn"><i class="fa fa-spinner"></i> Load more</a>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end causes-s2 -->

    </div>


<?php endwhile; ?>
