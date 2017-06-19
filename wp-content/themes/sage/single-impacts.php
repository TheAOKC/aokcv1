<?php while (have_posts()) : the_post(); ?>

    <section class="page-title-wrapper" >
        <div class="page-title none">
        </div>
    </section>

    <div class="page-main-content">

        <div class="container">
            <div class="row causes">
                <div class="col-sm-4">
                    <div class=" s-item-text-group half-offset-right">
                        <div class="s-item-title">
                            <div class="s-component s-text">
                                <h3 class="s-component-content s-font-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            </div>
                        </div>
                        <div class="s-component-content s-font-body">
                            Created: <?php the_time('l, F jS, Y') ?>
                        </div>

                        <div class="goal-raised">
                            <div class="progress">


                                <?php $donationpercent = round((get_field('project_raised') / get_field('project_goal')) * 100) ; ?>
                                <div class="progress-bar progress-bar-s2  appeared" data-percent="<?php echo $donationpercent; ?>" style="width: <?php echo $donationpercent; ?>%;"><span><?php echo $donationpercent; ?>%</span></div>
                            </div>

                            <div class="goal-raised-inner">
                                <div class="raised">
                                    <h4>Raised: <span>$<?php the_field('project_raised');?></span></h4>
                                </div>
                                <div class="goal">
                                    <h4>Goals: <span>$<?php the_field('project_goal');?></span></h4>
                                </div>
                            </div>
                        </div>

                        <a href="<?php the_field('donate_link', 'option'); ?>" class="btn theme-btn-s3" target="_blank">Donate</a>
                    </div>

                    <div class="s-item-right-footer">

                    </div>


                </div>

                <div class="col-sm-8 s-block-feature">
                    <?php the_post_thumbnail(); ?>

                    <div class="s-item-title">
                        <div class="s-component s-text">
                            <h3 class="s-component-content s-font-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                    </div>
                    <div class="s-component-content s-font-body">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; ?>
