<?php get_template_part('templates/page', 'header'); ?>


<div class="event-single-page">

<section class="event-single-wrapper section-padding">
    <div class="container">
        <div class="row content">
            <div class="col col-md-9 events-single">



                <?php get_template_part('templates/content-single', get_post_type()); ?>
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

                </div> <!-- end sidebar -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>

</div>