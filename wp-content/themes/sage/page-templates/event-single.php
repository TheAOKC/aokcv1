<?php
/**
 * Template Name: Event Single
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>

    <div class="event-single-page">


        <!-- start event-single-wrapper -->
        <section class="event-single-wrapper section-padding">
            <div class="container">
                <div class="row content">
                    <div class="col col-md-9 events-single">
                        <div class="event-single-date-slider">
                            <div class="date">
                                <span><i class="fa fa-calendar"></i> 18 april, 2018</span>
                            </div>
                            <div class="event-single-slider">
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event-single/img-1.jpg" alt>
                                </div>
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event-single/img-1.jpg" alt>
                                </div>
                                <div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/event-single/img-1.jpg" alt>
                                </div>
                            </div>
                        </div>
                        <div class="event-details">
                            <h2>Charity Run for Cancer Fighting People</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit volupt atem accusantium doloremque laudantium. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                            <p>Ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <ul class="event-info">
                                <li><i class="fa fa-map-marker"></i> Heemestede, Netherlands</li>
                                <li><i class="fa fa-calendar"></i> April 18, 2018</li>
                                <li><i class="fa fa-clock-o"></i> 9 am - 5 pm</li>
                            </ul>
                        </div>
                        <div class="event-location-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12419.336156809874!2d-77.04554466716324!3d38.9049103231097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7b78e03b73d8b%3A0xadb9a66c8c4d507e!2sDowntown%2C+Washington%2C+DC%2C+USA!5e0!3m2!1sbn!2sbd!4v1492576211812" allowfullscreen></iframe>
                        </div>
                        <div class="join-share">
                            <a href="#" class="btn theme-btn-s3">Join event</a>
                            <div class="share">
                                <span>SHARE:</span>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- end col -->


                    <div class="col col-md-3 sidebar-wrapper">
                        <div class="sidebar">
                            <div class="widget search-widget">
                                <form action="#" class="form">
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search here" required>
                                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>

                            <div class="widget recent-post">
                                <h3>Recent post</h3>
                                <div>
                                    <h4><a href="#">Education program in Uganda</a></h4>
                                    <a href="#" class="date">November 26, 2016</a>
                                </div>
                                <div>
                                    <h4><a href="#">War kids in Syria</a></h4>
                                    <a href="#" class="date">November 26, 2016</a>
                                </div>
                                <div>
                                    <h4><a href="#">African water crisis : Children and women</a></h4>
                                    <a href="#" class="date">November 26, 2016</a>
                                </div>
                            </div>

                            <div class="widget recent-causes">
                                <h3>Recent causes</h3>
                                <div>
                                    <h4><a href="#">Blood Donation in virginia</a></h4>
                                    <p class="remaing-date">22 days remaing</p>
                                </div>
                                <div>
                                    <h4><a href="#">Boston orphanage opening</a></h4>
                                    <p class="remaing-date">22 days remaing</p>
                                </div>
                                <div>
                                    <h4><a href="#">Hair for cancer</a></h4>
                                    <p class="remaing-date">22 days remaing</p>
                                </div>
                            </div>

                            <div class="widget recent-events-widget">
                                <h3>Events nearby</h3>
                                <div class="event-list">
                                    <div class="event-pic">
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/events-nearby/img-1.jpg" alt class="img img-responsive"></a>
                                    </div>
                                    <div class="event-info">
                                        <h4><a href="#">Cure Our World</a></h4>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-calender"></i> 17 March, 2017</a></li>
                                            <li><a href="#"><i class="fa fa-map-marker"></i> 221B, Baker Street</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="event-list">
                                    <div class="event-pic">
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/events-nearby/img-2.jpg" alt class="img img-responsive"></a>
                                    </div>
                                    <div class="event-info">
                                        <h4><a href="#">Towards Humanity</a></h4>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-calender"></i> 17 March, 2017</a></li>
                                            <li><a href="#"><i class="fa fa-map-marker"></i> 221B, Baker Street</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end sidebar -->
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end event-single-wrapper -->
    </div>
<?php endwhile; ?>
