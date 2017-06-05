<?php while (have_posts()) : the_post(); ?>

    <section class="causes-single-wrapper section-padding">
        <div class="container">
            <div class="row content">
                <div class="col col-md-9">
                    <div class="causes-single">
                        <div class="img-holder">
                            <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'fundraise-thumb', ['class' => 'img img-responsive'] );
                            } else {
                                echo '<img src="'. get_template_directory_uri(). '/assets/images/causes-s3/img-1.jpg" alt class="img img-responsive">';
                            }

                            ?>
                        </div>


                        <div class="causes-list-box">
                            <div class="title">
                                <h3><?php the_title();?></h3>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-s1" data-percent="55"></div>
                                </div>
                                <h4>Raised: <span>$<?php the_field('project_raised');?></span> / $<?php the_field('project_goal');?></h4>
                            </div>


                            <div class="inner-details">
                                <?php the_content(); ?>

                                <div class="donation-form quick-donation-section">
                                    <div class="donate-btn ">
                                        <a href="<?php the_field('donate_link', 'option'); ?>" class="btn btn-block theme-btn" target="_blank">Donate</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


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

                        <div class="widget recent-causes">
                            <h3>Recent Projects</h3>
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
                    </div>
                </div>
            </div>
        </div>
    </section>

  <?php get_template_part('templates/layout', 'builder'); ?>

<?php endwhile; ?>
