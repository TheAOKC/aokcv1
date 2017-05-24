<div class="causes-s2-page">

    <!-- start causes-s2 -->
    <section class="causes-s2 recent-causes section-padding">
        <div class="container">
            <div class="row section-title">
                <div class="col col-md-8 col-md-offset-2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                </div>
            </div> <!-- end section-title -->


            <?php if( have_rows('brand_list') ): ?>
            <div class="row causes-s2-grids">

                <?php while( have_rows('brand_list') ): the_row(); ?>

                    <div class="col col-sm-3">
                        <div class="grid partner-item">

                            <?php $process_vlink = get_sub_field('partners_vlink'); ?>

                            <?php if( $process_vlink["title"] ) : ?>
                                <a href="<?php echo $process_vlink["url"]; ?>" target="<?php echo $process_vlink["target"]; ?>">
                            <?php endif; ?>

                                <div class="img-goal-raised ">
                                    <div class="img-holder">
                                        <img src="<?php the_sub_field('partners_logo'); ?>" alt class="img img-responsive">
                                    </div>

                                </div>
                                <div class="causes-info">
                                    <h3><?php the_sub_field('partners_title'); ?></h3>

                                </div>

                            <?php if( $process_vlink["title"] ) : ?>
                                </a>
                            <?php endif; ?>

                        </div>
                    </div>

                <?php endwhile; ?>

            </div> <!-- end row -->
            <?php endif; ?>

        </div> <!-- end container -->
    </section>
    <!-- end causes-s2 -->

</div>