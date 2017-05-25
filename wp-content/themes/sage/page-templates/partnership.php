<?php
/**
 * Template Name: Partnership
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>

<section class="section-padding">
    <div class="container">
        <div class="row section-title">
            <div class="col col-md-8 col-md-offset-2">
                <h3>Join Camfed’s expanding network of partners in the private sector who are backing girls to complete school and become tomorrow’s entrepreneurs and leaders, and discover the benefits for your business, employees and customers.</h3>
            </div>
        </div>
    </div>
</section>

    <section class="causes-s2 recent-causes section-padding">
        <div class="container">
            <div class="row section-title">
                <div class="col col-md-8 col-md-offset-2">
                    <h3>How we work with companies</h3>
                    <p>We can help you demonstrate your purpose effectively through various vehicles of engagement. Your company could support our successful education programmes keeping girls in school, help fund financial literacy, health, and life skills training for graduates, or provide technological solutions to accelerate the progress of our rapidly growing alumnae network many of whom run successful small enterprises.</p>
                </div>
            </div>

            <div class="row causes-s2-grids">

                <div class="col col-xs-6">
                    <div class="grid">
                        <div class="img-goal-raised">

                            <div class="img-holder">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/causes-s3/img-1.jpg" alt class="img img-responsive">

                            </div>

                        </div>
                        <div class="causes-info">
                            <h3>CSR partnerships</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi assumenda culpa ducimus eius facilis mollitia praesentium quo repudiandae voluptate!</p>
                        </div>
                    </div>
                </div>

                <div class="col col-xs-6">
                    <div class="grid">
                        <div class="img-goal-raised">

                            <div class="img-holder">

                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/causes-s3/img-1.jpg" alt class="img img-responsive">

                            </div>

                        </div>
                        <div class="causes-info">
                            <h3>ABC partnerships</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi assumenda culpa ducimus eius facilis mollitia praesentium quo repudiandae voluptate!</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>





    <section class="charity-categories-section section-padding">
        <div class="container">
            <div class="row section-title">
                <div class="col col-md-8 col-md-offset-2">
                    <h2>Why support Camfed?</h2>
                </div>
            </div>

            <div class="row charity-categories-section-grids">
                <div class="col col-md-4 col-sm-6">
                    <div class="grid">
                        <div class="info">
                            <h3>Track record</h3>
                            <p>Icididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation..</p>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4 col-sm-6">
                    <div class="grid">
                        <div class="info">
                            <h3>National and international advocacy</h3>
                            <p>Icididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation..</p>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4 col-sm-6">
                    <div class="grid">
                        <div class="info">
                            <h3>International recognition</h3>
                            <p>Icididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation..</p>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4 col-sm-6">
                    <div class="grid">
                        <div class="info">
                            <h3>Impact</h3>
                            <p>Icididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation..</p>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4 col-sm-6">
                    <div class="grid">
                        <div class="info">
                            <h3>Sustainability</h3>
                            <p>Icididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation..</p>
                        </div>
                    </div>
                </div>
                <div class="col col-md-4 col-sm-6">
                    <div class="grid">
                        <div class="info">
                            <h3>Multiplier effect</h3>
                            <p>Icididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="partners section-padding">
        <div class="container">
            <div class="row section-title">
                <h2>Our Proud Partners</h2>
            </div>

            <div class="row">
                <div class="col col-xs-12">
                    <div class="partners-grids partners-slider">
                        <div class="grid">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/img-1.jpg" alt class="img img-responsive">
                        </div>
                        <div class="grid">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/img-2.jpg" alt class="img img-responsive">
                        </div>
                        <div class="grid">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/img-3.jpg" alt class="img img-responsive">
                        </div>
                        <div class="grid">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/img-4.jpg" alt class="img img-responsive">
                        </div>
                        <div class="grid">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/img-5.jpg" alt class="img img-responsive">
                        </div>
                        <div class="grid">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partners/img-1.jpg" alt class="img img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php endwhile; ?>
