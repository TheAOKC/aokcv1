<?php
/**
 * Template Name: Our Story
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>

    <!-- start about-company-section -->
    <section class="about-company-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-7 left-col">
                    <div class="about-company">
                        <span>About the company</span>
                        <h2>Charity World is a simple, replicable and scalable approach with proven success towards humanity.</h2>
                        <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos trud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excep teur sint occaecat cupidatat non proident</p>
                        <a href="#" class="theme-btn-s4">Read more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>

                <div class="col col-md-5 right-col">

                    <div class="some-info">
                        <div class="circle"></div>
                        <div class="info-box">
                                <span class="icon">
                                    <i class="fi flaticon-coins-1"></i>
                                </span>
                            <div class="details">
                                <h4>2.40 m</h4>
                                <span>Donation</span>
                            </div>
                        </div>
                        <div class="info-box">
                                <span class="icon">
                                    <i class="fi flaticon-medical"></i>
                                </span>
                            <div class="details">
                                <h4>01</h4>
                                <span>Purpose</span>
                            </div>
                        </div>
                        <div class="info-box">
                                <span class="icon">
                                    <i class="fi flaticon-people-1"></i>
                                </span>
                            <div class="details">
                                <h4>12.8 k</h4>
                                <span>Volunteers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end about-company-section -->


    <!-- start fun-fact -->
    <section class="fun-fact fun-fact-s2 parallax" data-bg-image="images/fun-fact-bg2.jpg" data-speed="3">
        <div class="container">
            <div class="row content start-count">
                <div class="col col-sm-3 col-xs-6">
                    <div class="grid">
                        <div class="circle-data">
                            <span class="counter" data-count="12">00</span>
                        </div>
                        <h3>Years of Experience</h3>
                    </div>
                </div>

                <div class="col col-sm-3 col-xs-6">
                    <div class="grid">
                        <div class="circle-data">
                            <span class="counter" data-count="14">00</span>
                        </div>
                        <h3>Thousands Volunteers</h3>
                    </div>
                </div>

                <div class="col col-sm-3 col-xs-6">
                    <div class="grid">
                        <div class="circle-data">
                            <span class="counter" data-count="23">00</span>
                        </div>
                        <h3>Worldwide Offices</h3>
                    </div>
                </div>

                <div class="col col-sm-3 col-xs-6">
                    <div class="grid">
                        <div class="circle-data">
                            <span class="counter" data-count="97">00</span>
                        </div>
                        <h3>Assisting Organizations</h3>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end fun-fact -->

<?php endwhile; ?>
