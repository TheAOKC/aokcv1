<?php
/**
 * Template Name: Blog
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>

    <div class="blog-page">

    <!-- start main-blog -->
    <section class="main-blog section-padding">
        <div class="container">
            <div class="row blog-grids">
                <div class="col col-lg-4 col-xs-6">
                    <div class="grid">
                        <div class="entry-media">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/img-4.jpg" alt class="img img-responsive">
                            </div>
                            <div class="tags">
                                <ul>
                                    <li><a href="#">Non-profit</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="entry-body">
                            <div class="entry-title">
                                <h3><a href="<?php echo get_the_permalink(76); ?>">“Sale flower for charity” Finished successfully</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="#">Aaron ramsey</a></li>
                                    <li><a href="#">19 Feb, 2018</a></li>
                                </ul>
                            </div>
                            <div class="continue">
                                <a href="<?php echo get_the_permalink(76); ?>">Continue reading..</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-4 col-xs-6">
                    <div class="grid">
                        <div class="entry-media">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/img-5.jpg" alt class="img img-responsive">
                            </div>
                            <div class="tags">
                                <ul>
                                    <li><a href="#">Non-profit</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="entry-body">
                            <div class="entry-title">
                                <h3><a href="<?php echo get_the_permalink(76); ?>">“Sale flower for charity” Finished successfully</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="#">Aaron ramsey</a></li>
                                    <li><a href="#">19 Feb, 2018</a></li>
                                </ul>
                            </div>
                            <div class="continue">
                                <a href="<?php echo get_the_permalink(76); ?>">Continue reading..</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-4 col-xs-6">
                    <div class="grid">
                        <div class="entry-media">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/img-6.jpg" alt class="img img-responsive">
                            </div>
                            <div class="tags">
                                <ul>
                                    <li><a href="#">Non-profit</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="entry-body">
                            <div class="entry-title">
                                <h3><a href="<?php echo get_the_permalink(76); ?>">“Sale flower for charity” Finished successfully</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="#">Aaron ramsey</a></li>
                                    <li><a href="#">19 Feb, 2018</a></li>
                                </ul>
                            </div>
                            <div class="continue">
                                <a href="<?php echo get_the_permalink(76); ?>">Continue reading..</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-4 col-xs-6">
                    <div class="grid">
                        <div class="entry-media">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/img-7.jpg" alt class="img img-responsive">
                            </div>
                            <div class="tags">
                                <ul>
                                    <li><a href="#">Non-profit</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="entry-body">
                            <div class="entry-title">
                                <h3><a href="<?php echo get_the_permalink(76); ?>">“Sale flower for charity” Finished successfully</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="#">Aaron ramsey</a></li>
                                    <li><a href="#">19 Feb, 2018</a></li>
                                </ul>
                            </div>
                            <div class="continue">
                                <a href="<?php echo get_the_permalink(76); ?>">Continue reading..</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-4 col-xs-6">
                    <div class="grid">
                        <div class="entry-media">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/img-8.jpg" alt class="img img-responsive">
                            </div>
                            <div class="tags">
                                <ul>
                                    <li><a href="#">Non-profit</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="entry-body">
                            <div class="entry-title">
                                <h3><a href="<?php echo get_the_permalink(76); ?>">“Sale flower for charity” Finished successfully</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="#">Aaron ramsey</a></li>
                                    <li><a href="#">19 Feb, 2018</a></li>
                                </ul>
                            </div>
                            <div class="continue">
                                <a href="<?php echo get_the_permalink(76); ?>">Continue reading..</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-4 col-xs-6">
                    <div class="grid">
                        <div class="entry-media">
                            <div class="img-holder">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/img-1.jpg" alt class="img img-responsive">
                            </div>
                            <div class="tags">
                                <ul>
                                    <li><a href="#">Non-profit</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="entry-body">
                            <div class="entry-title">
                                <h3><a href="#">“Clean Central Park 2017” Finished successfully</a></h3>
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><a href="#">Aaron ramsey</a></li>
                                    <li><a href="#">19 Feb, 2018</a></li>
                                </ul>
                            </div>
                            <div class="continue">
                                <a href="<?php echo get_the_permalink(76); ?>">Continue reading..</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->

            <div class="pagination-wrapper">
                <ul>
                    <li>
                        <a href="#" aria-label="Previous">
                            <i class="fa fa-angle-double-left"></i>
                        </a>
                    </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <i class="fa fa-angle-double-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end main-blog -->

    </div>


<?php endwhile; ?>
