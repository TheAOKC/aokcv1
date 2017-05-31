<?php use Roots\Sage\Titles; ?>

<?php

$slider = true;
if( have_rows('layout_modules') ):

    while ( have_rows('layout_modules') ) : the_row(); ?>
        <?php if( get_row_layout() == 'banner_slider' ): ?>

            <?php get_template_part('templates/layout-builder', 'banner-slider'); ?>

            <?php $slider = false; ?>

        <?php endif; ?>
    <?php endwhile; ?>

<?php endif; ?>

<?php if( $slider ) : ?>

    <?php if( get_field('default_page_banner', 'option') ) {
        $pagebg = "background-image:url(". get_field('default_page_banner', 'option') .")";
    } ?>

    <section class="page-title-wrapper" >
        <div class="page-title" style="<?php echo $pagebg; ?>">
            <h1><?= Titles\title(); ?></h1>
        </div>
    </section>
<?php endif; ?>

