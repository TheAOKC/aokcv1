<?php use Roots\Sage\Titles; ?>

<?php $bcount = 0; if( have_rows('banner_slides_list') ): ?>

    <section class="hero hero-slider-wrapper hero-slider-s3">
        <div class="hero-slider">
            <?php while( have_rows('banner_slides_list') ): the_row();  $bcount++; ?>

                <div class="slide row">
                    <img src="<?php the_sub_field('banner_slide_bg'); ?>" alt class="slider-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 slide-caption">
                                <h1><?php the_sub_field('banner_slide_title'); ?></h1>

                                <?php the_sub_field('banner_slide_desc'); ?>

                                <?php $banner_slide_link = get_sub_field('banner_slide_link'); ?>

                                <?php if( $banner_slide_link["title"] ) : ?>
                                    <a href="<?php echo $banner_slide_link["url"]; ?>" class="btn btn-primary"  target="<?php echo $banner_slide_link["target"]; ?>">
                                        <?php echo $banner_slide_link["title"]; ?>
                                    </a>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>

        <?php  if( $bcount <= 1 ): ?>

            <style>
                .hero .hero-slider .owl-controls {
                    display: none;
                }

                .hero-slider-wrapper + .page-title-wrapper {
                    display: none!important;
                }
            </style>
        <?php endif; ?>
    </section>




<?php else: ?>

    <section class="page-title-wrapper">
        <div class="page-title">
            <h1><?= Titles\title(); ?></h1>
        </div>
    </section>

<?php endif; ?>



