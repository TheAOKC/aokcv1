<?php
/**
 * Template Name: Blog Single
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>

    <div class="blog-details-page">

        <!-- start blog-single-main-content -->
        <section class="blog-single-main-content section-padding">
            <div class="container">
                <div class="row">
                    <div class="col col-md-9 col-sm-12 blog-single-content">
                        <div class="post">
                            <div class="media">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-detail/img-1.jpg" alt class="img img-responsive">
                            </div>
                            <div class="post-title-meta">
                                <button class="btn">Water</button>
                                <h2>Clean Water Charity - $15,000 funds a well for a village‎</h2>
                                <ul>
                                    <li><a href="#">Hasib sharif</a></li>
                                    <li><a href="#">21 feb, 2016</a></li>
                                </ul>
                            </div>
                            <div class="post-body">
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                                <p>Which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum genera tors on the Internet tend to repeat predefined chunks as necessary, making this the first true genera tor on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence </p>
                            </div>
                            <div class="gallery-post">
                                <div class="gallery">
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-detail/img-2.jpg" alt class="img img-responsive">
                                    </div>
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-detail/img-3.jpg" alt class="img img-responsive">
                                    </div>
                                </div>

                                <h3>Lorem Ipsum is not simply random text. </h3>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                            </div>
                        </div> <!-- end post -->

                        <div class="tag-share">
                            <div>
                                <span>Tags: </span>
                                <ul class="tag">
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Article</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Creative</a></li>
                                </ul>
                            </div>

                            <div>
                                <ul class="share">
                                    <li><a href="#"><i class="fa fa-facebook"></i>Like</a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i>Tweet</a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i>Share</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="comments">
                            <div class="title">
                                <h3><span>2</span> comments</h3>
                            </div>

                            <ol>
                                <li>
                                    <div class="article">
                                        <div class="author-pic">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-detail/comments/img-1.jpg" alt>
                                        </div>
                                        <div class="details">
                                            <div class="author-meta">
                                                <div class="name"><h4>Hasib sharif</h4></div>
                                                <div class="date"><span>2 hours ago</span></div>
                                            </div>
                                            <div class="comment-content">
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                                            </div>
                                            <div class="replay">
                                                <button>Replay</button>
                                            </div>
                                        </div>
                                    </div>
                                    <ol>
                                        <li>
                                            <div class="article">
                                                <div class="author-pic">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-detail/comments/img-2.jpg" alt>
                                                </div>
                                                <div class="details">
                                                    <div class="author-meta">
                                                        <div class="name"><h4>Ahmad sharif</h4></div>
                                                        <div class="date"><span>2 hours ago</span></div>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                                                    </div>
                                                    <div class="replay">
                                                        <button>Replay</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="article">
                                                <div class="author-pic">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-detail/comments/img-2.jpg" alt>
                                                </div>
                                                <div class="details">
                                                    <div class="author-meta">
                                                        <div class="name"><h4>Ahmad sharif</h4></div>
                                                        <div class="date"><span>2 hours ago</span></div>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                                                    </div>
                                                    <div class="replay">
                                                        <button>Replay</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                </li>

                                <li>
                                    <div class="article">
                                        <div class="author-pic">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-detail/comments/img-1.jpg" alt>
                                        </div>
                                        <div class="details">
                                            <div class="author-meta">
                                                <div class="name"><h4>Hasib sharif</h4></div>
                                                <div class="date"><span>2 hours ago</span></div>
                                            </div>
                                            <div class="comment-content">
                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                                            </div>
                                            <div class="replay">
                                                <button>Replay</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>

                            <div class="comment-respond">
                                <h3>Post your comment</h3>
                                <form class="clearfix">
                                    <div class="col col-md-4">
                                        <input type="text" class="form-control" placeholder="username..">
                                    </div>
                                    <div class="col col-md-4">
                                        <input type="email" class="form-control" placeholder="email address..">
                                    </div>
                                    <div class="col col-md-4">
                                        <input type="text" class="form-control" placeholder="website..">
                                    </div>
                                    <div class="col col-xs-12">
                                        <textarea class="form-control" placeholder="write.."></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn theme-btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end comments -->
                    </div> <!-- end blog-single-content -->

                    <div class="col col-md-3 col-sm-5">
                        <div class="blog-sidebar">
                            <div class="widget search-widget">
                                <form class="form">
                                    <input type="text" class="form-control" placeholder="Search here..">
                                </form>
                            </div>
                            <div class="widget category-widget">
                                <h3>Category</h3>
                                <ul>
                                    <li><a href="#">Food <span class="badge">12</span></a></li>
                                    <li><a href="#">Water <span class="badge">20</span></a></li>
                                    <li><a href="#">Education <span class="badge">8</span></a></li>
                                    <li><a href="#">Africa <span class="badge">45</span></a></li>
                                    <li><a href="#">India <span class="badge">33</span></a></li>
                                    <li><a href="#">Event <span class="badge">12</span></a></li>
                                </ul>
                            </div>
                            <div class="widget recent-post-widget">
                                <h3>Recent post</h3>
                                <ul>
                                    <li>
                                        <div class="post-pic">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-detail/thumb/img-1.jpg" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">Micenas placerat nibh loreming fentum</a></h4>
                                            <span>Sep 25, 2016</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-pic">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-detail/thumb/img-2.jpg" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">Integer suscipit sit amet</a></h4>
                                            <span>Sep 25, 2016</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="post-pic">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-detail/thumb/img-3.jpg" alt>
                                        </div>
                                        <div class="details">
                                            <h4><a href="#">Praeent vehicula neget tempus</a></h4>
                                            <span>Sep 25, 2016</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget archive-widget">
                                <h3>Archive</h3>
                                <ul>
                                    <li><a href="#">September 2015 <span class="badge">12</span></a></li>
                                    <li><a href="#">August 2015 <span class="badge">20</span></a></li>
                                    <li><a href="#">July 2015 <span class="badge">8</span></a></li>
                                    <li><a href="#">October 2014 <span class="badge">45</span></a></li>
                                    <li><a href="#">January 2014 <span class="badge">33</span></a></li>
                                    <li><a href="#">December 2013 <span class="badge">12</span></a></li>
                                </ul>
                            </div>
                            <div class="widget tag-widget">
                                <h3>Tags</h3>
                                <div class="all-tags">
                                    <a href="#" class="btn">Team</a>
                                    <a href="#" class="btn">Charity</a>
                                    <a href="#" class="btn">Volunteer</a>
                                    <a href="#" class="btn">Web</a>
                                    <a href="#" class="btn">Human</a>
                                    <a href="#" class="btn">Education</a>
                                    <a href="#" class="btn">UI</a>
                                    <a href="#" class="btn">Speech</a>
                                    <a href="#" class="btn">News</a>
                                    <a href="#" class="btn">2016</a>
                                    <a href="#" class="btn">Welfare</a>
                                    <a href="#" class="btn">Design</a>
                                    <a href="#" class="btn">Event</a>
                                </div>
                            </div>
                            <div class="widget instagram-widget">
                                <h3>Instagram</h3>
                                <ul>
                                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram/img-1.jpg" alt></a></li>
                                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram/img-2.jpg" alt></a></li>
                                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram/img-3.jpg" alt></a></li>
                                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram/img-4.jpg" alt></a></li>
                                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram/img-5.jpg" alt></a></li>
                                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram/img-6.jpg" alt></a></li>
                                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram/img-7.jpg" alt></a></li>
                                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram/img-8.jpg" alt></a></li>
                                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram/img-9.jpg" alt></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end blog-single-main-content -->


    </div>


<?php endwhile; ?>
