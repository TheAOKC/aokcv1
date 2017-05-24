<?php

if( have_rows('layout_modules') ):

    while ( have_rows('layout_modules') ) : the_row();

        if( get_row_layout() == 'bl_recent_project' ): ?>

            <?php get_template_part('templates/layout-builder', 'recent-project'); ?>

        <?php elseif( get_row_layout() == 'featured_blocks' ): ?>

            <?php get_template_part('templates/layout-builder', 'featured-blocks'); ?>

        <?php elseif( get_row_layout() == 'banner_slider' ): ?>

            <?php get_template_part('templates/layout-builder', 'banner-slider'); ?>

        <?php elseif( get_row_layout() == 'we_want_to_change' ): ?>

            <?php get_template_part('templates/layout-builder', 'wwwtc'); ?>

        <?php elseif( get_row_layout() == 'fundraise_list' ): ?>

            <?php get_template_part('templates/layout-builder', 'fundraise-list'); ?>

        <?php elseif( get_row_layout() == 'team_list' ): ?>

            <?php get_template_part('templates/layout-builder', 'team'); ?>

        <?php elseif( get_row_layout() == 'partners' ): ?>

            <?php get_template_part('templates/layout-builder', 'partners'); ?>

        <?php endif;

    endwhile;

endif;

?>

