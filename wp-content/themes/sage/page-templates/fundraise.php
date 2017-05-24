<?php
/**
 * Template Name: Fundraise
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
                    <p>Join Team Camfed today and help raise money to support girls' education in Africa. Whether you hold an event at school or work, take to the streets to run a marathon or fundraise with friends, there are lots of ways to get involved.</p>
                </div>
            </div> <!-- end section-title -->

            <div class="row causes-s2-grids">
                <div class="col col-xs-6">
                    <div class="grid">
                        <div class="img-goal-raised">
                            <div class="img-holder">
                                <img src="https://camfedorg2015.s3.amazonaws.com/uploads/files/Fundraise-at-school-fundraise.jpg" alt class="img img-responsive">
                            </div>

                        </div>
                        <div class="causes-info">
                            <h3><a href="#">Fundraise at school</a></h3>
                            <p>Fundraise at school to give more girls the opportunity to get an education in Africa</p>
                        </div>
                    </div>
                </div>
                <div class="col col-xs-6">
                    <div class="grid">
                        <div class="img-goal-raised">
                            <div class="img-holder">
                                <img src="https://camfedorg2015.s3.amazonaws.com/uploads/files/Fundraise-at-work-fundraise.jpg" alt class="img img-responsive">
                            </div>

                        </div>
                        <div class="causes-info">
                            <h3><a href="#">Fundraise at work</a></h3>
                            <p>Get your colleagues together to raise funds for girls in rural Africa to go to school</p>
                        </div>
                    </div>
                </div>
                <div class="col col-xs-6">
                    <div class="grid">
                        <div class="img-goal-raised">
                            <div class="img-holder">
                                <img src="https://camfedorg2015.s3.amazonaws.com/uploads/files/In-celebration-fundraise.jpg" alt class="img img-responsive">
                            </div>

                        </div>
                        <div class="causes-info">
                            <h3><a href="#">In celebration</a></h3>
                            <p>Share your joy by fundraising in celebration of an important day in your life</p>
                        </div>
                    </div>
                </div>
                <div class="col col-xs-6">
                    <div class="grid">
                        <div class="img-goal-raised">
                            <div class="img-holder">
                                <img src="https://camfedorg2015.s3.amazonaws.com/uploads/files/Fundraise-at-work-fundraise.jpg" alt class="img img-responsive">
                            </div>

                        </div>
                        <div class="causes-info">
                            <h3><a href="#">Personal fundraising</a></h3>
                            <p>Give the gift of education in memory of a loved one and change the lives of girls</p>
                        </div>
                    </div>
                </div>
                <div class="col col-xs-6">
                    <div class="grid">
                        <div class="img-goal-raised">
                            <div class="img-holder">
                                <img src="https://camfedorg2015.s3.amazonaws.com/uploads/files/Fundraise-at-work-fundraise.jpg" alt class="img img-responsive">
                            </div>

                        </div>
                        <div class="causes-info">
                            <h3><a href="#">Start fundraising now</a></h3>
                            <p>Ready to fundraise? Set up a personal fundraising page by filling in this form</p>
                        </div>
                    </div>
                </div>
                <div class="col col-xs-6">
                    <div class="grid">
                        <div class="img-goal-raised">
                            <div class="img-holder">
                                <img src="https://camfedorg2015.s3.amazonaws.com/uploads/files/Fundraise-at-work-fundraise.jpg" alt class="img img-responsive">
                            </div>

                        </div>
                        <div class="causes-info">
                            <h3><a href="#">Personal fundraising</a></h3>
                            <p>Ready to fundraise? Set up a personal fundraising page by filling in this form</p>
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
