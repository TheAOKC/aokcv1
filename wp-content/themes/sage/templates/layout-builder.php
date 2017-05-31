<?php

if( have_rows('layout_modules') ):

    while ( have_rows('layout_modules') ) : the_row();

        if( get_row_layout() == 'bl_recent_project' ): ?>

            <?php get_template_part('templates/layout-builder', 'projects'); ?>

        <?php elseif( get_row_layout() == 'featured_blocks' ): ?>

            <?php get_template_part('templates/layout-builder', 'featured-blocks'); ?>

        <?php elseif( get_row_layout() == 'impact_builder' ): ?>

            <?php get_template_part('templates/layout-builder', 'impact'); ?>

        <?php elseif( get_row_layout() == 'fundraise_list' ): ?>

            <?php get_template_part('templates/layout-builder', 'fundraise-list'); ?>

        <?php elseif( get_row_layout() == 'team_list' ): ?>

            <?php get_template_part('templates/layout-builder', 'team'); ?>

        <?php elseif( get_row_layout() == 'hero' ): ?>

            <?php get_template_part('templates/layout-builder', 'hero'); ?>

        <?php elseif( get_row_layout() == 'partners' ): ?>

            <?php get_template_part('templates/layout-builder', 'partners'); ?>

        <?php elseif( get_row_layout() == 'contact' ): ?>

            <?php get_template_part('templates/layout-builder', 'contact'); ?>

        <?php endif;

    endwhile;

endif;

?>

