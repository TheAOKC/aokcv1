<section class="charity-categories-section featued-blocks">
    <div class="container">
        <div class="section-title">
            <h3><?php the_sub_field('fblocks_title'); ?></h3>
        </div>

        <?php  if( have_rows('block_list') ): ?>
        <div class="row charity-categories-section-grids">
            <?php while( have_rows('block_list') ): the_row(); ?>
            <div class="col col-sm-4">
                <div class="grid">
                    <div class="icon">


                        <?php
                        $sub_process_icon        = get_sub_field('fblocks_type_icon');
                        $sub_process_icon_upload = get_sub_field('fblocks_upload_icon');

                        if( $sub_process_icon == "Upload" ) : ?>
                            <span class="f-block-icon">
                                <img src="<?php echo $sub_process_icon_upload; ?>" alt="">
                            </span>
                        <?php else : ?>
                            <span class="f-block-icon">
                                <?php if( $sub_process_icon == 'Star' ) : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/aokc-icon-1.svg" >
                                <?php elseif( $sub_process_icon == 'Heart' ) : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/aokc-icon-2.svg" >
                                <?php elseif( $sub_process_icon == 'Power' ) : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/aokc-icon-3.svg" >
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/aokc-icon-1.svg" >
                                <?php endif; ?>
                            </span>
                        <?php endif; ?>

                    </div>
                    <div class="info">
                        <h3><?php the_sub_field('fblocks_title'); ?></h3>
                        <?php the_sub_field('fblocks_description'); ?>

                        <?php $fblock_vlink = get_sub_field('fblock_vlink'); ?>
                        <?php if( $fblock_vlink["title"] ) : ?>
                            <a href="<?php echo $fblock_vlink["url"]; ?>" class="details"  target="<?php echo $fblock_vlink["target"]; ?>">
                                <?php echo $fblock_vlink["title"]; ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <?php endwhile; ?>

        </div>

        <?php endif; ?>

        <div class="row section-footer-title">
            <div class=" section-title">
                <div class="col col-md-8 col-md-offset-2">
                    <h3><?php the_sub_field('fblocks_footer_title'); ?></h3>
                </div>
            </div>
        </div>

        <?php $fblocks_vlink = get_sub_field('fblocks_vlink'); ?>
        <?php if( $fblocks_vlink["title"] ) : ?>
            <a href="<?php echo $fblocks_vlink["url"]; ?>" class="btn btn-primary"  target="<?php echo $fblocks_vlink["target"]; ?>">
                <?php echo $fblocks_vlink["title"]; ?>
            </a>
        <?php endif; ?>

    </div>
</section>
