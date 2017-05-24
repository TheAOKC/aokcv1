<?php
/**
 * Template Name: Event
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>

    <div class="events-page">


        <!-- start events-list-wrapper -->
        <section class="events-list-wrapper section-padding">
            <div class="container">
                <div class="row content">
                    <div class="col col-md-9 events-list">
                        <div class="event-row">
                            <div class="event-details">
                                <div class="date">
                                    <span><i class="fa fa-calendar"></i> 18 april, 2018</span>
                                </div>
                                <h3><a href="#">Tibet Kids Cloth Donation</a></h3>
                                <ul class="event-info">
                                    <li><i class="fa fa-clock-o"></i> 09.00 am</li>
                                    <li><i class="fa fa-map-marker"></i> 244 Fletcher Dr, Gainesville, FL 32603</li>
                                </ul>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit volupt atem accusantium doloremque laudantium.</p>

                                <a href="<?php echo get_the_permalink(78); ?>" class="join-event">Join event <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="event-pic">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/events/img-1.jpg" alt>
                            </div>
                        </div>

                        <div class="event-row">
                            <div class="event-details">
                                <div class="date">
                                    <span><i class="fa fa-calendar"></i> 18 april, 2018</span>
                                </div>
                                <h3><a href="#">Senior Citizen Facility Moving</a></h3>
                                <ul class="event-info">
                                    <li><i class="fa fa-clock-o"></i> 09.00 am</li>
                                    <li><i class="fa fa-map-marker"></i> 244 Fletcher Dr, Gainesville, FL 32603</li>
                                </ul>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit volupt atem accusantium doloremque laudantium.</p>

                                <a href="<?php echo get_the_permalink(78); ?>" class="join-event">Join event <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="event-pic">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/events/img-2.jpg" alt>
                            </div>
                        </div>

                        <div class="event-row">
                            <div class="event-details">
                                <div class="date">
                                    <span><i class="fa fa-calendar"></i> 18 april, 2018</span>
                                </div>
                                <h3><a href="#">Summer Cloth Donation</a></h3>
                                <ul class="event-info">
                                    <li><i class="fa fa-clock-o"></i> 09.00 am</li>
                                    <li><i class="fa fa-map-marker"></i> 244 Fletcher Dr, Gainesville, FL 32603</li>
                                </ul>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit volupt atem accusantium doloremque laudantium.</p>

                                <a href="<?php echo get_the_permalink(78); ?>" class="join-event">Join event <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="event-pic">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/events/img-3.jpg" alt>
                            </div>
                        </div>

                        <div class="event-row">
                            <div class="event-details">
                                <div class="date">
                                    <span><i class="fa fa-calendar"></i> 18 april, 2018</span>
                                </div>
                                <h3><a href="#">Free Check Up for Kids</a></h3>
                                <ul class="event-info">
                                    <li><i class="fa fa-clock-o"></i> 09.00 am</li>
                                    <li><i class="fa fa-map-marker"></i> 244 Fletcher Dr, Gainesville, FL 32603</li>
                                </ul>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit volupt atem accusantium doloremque laudantium.</p>

                                <a href="<?php echo get_the_permalink(78); ?>" class="join-event">Join event <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="event-pic">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/events/img-4.jpg" alt>
                            </div>
                        </div>

                        <div class="load-more">
                            <a href="<?php echo get_the_permalink(78); ?>" class="btn theme-btn-s3"><i class="fa fa-spinner"></i> Load more</a>
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
                                    <a href="<?php echo get_the_permalink(78); ?>" class="date">November 26, 2016</a>
                                </div>
                                <div>
                                    <h4><a href="#">War kids in Syria</a></h4>
                                    <a href="<?php echo get_the_permalink(78); ?>" class="date">November 26, 2016</a>
                                </div>
                                <div>
                                    <h4><a href="#">African water crisis : Children and women</a></h4>
                                    <a href="<?php echo get_the_permalink(78); ?>" class="date">November 26, 2016</a>
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
        <!-- end events-list-wrapper -->

<?php endwhile; ?>
