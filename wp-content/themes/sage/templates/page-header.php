<?php use Roots\Sage\Titles; ?>

<?php if( !is_front_page() ) : ?>

    <?php if( is_singular('team') || is_singular('post') ) : ?>
      <div class="masterhead masterhead-empty"></div>
    <?php else : ?>
      <div class="masterhead masterhead-page">
        <div class="container">
          <h1><?= Titles\title(); ?></h1>
        </div>
      </div>
    <?php endif; ?>

<?php endif; ?>

<?php

if ( function_exists('yoast_breadcrumb') && !is_front_page() ) : ?>

  <div class="breadcrumb">
    <div class="container">

      <?php $post_types = array('team'); ?>
      <?php if(is_post_type_archive( $post_types ) || is_singular( $post_types ) ): ?>

        <a href="<?php echo home_url(); ?>/" rel="v:url" property="v:title">Home</a>
        <a href="<?php echo get_the_permalink(6); ?>" rel="v:url" property="v:title">Your Team</a>
        <strong><?php the_title(); ?></strong>

      <?php elseif(is_post_type_archive( 'service' ) || is_singular( 'service' ) ): ?>

        <a href="<?php echo home_url(); ?>/" rel="v:url" property="v:title">Home</a>
        <a href="<?php echo get_the_permalink(8); ?>" rel="v:url" property="v:title">Services</a>
        <strong><?php the_title(); ?></strong>

      <?php elseif( is_home() ): ?>

        <a href="<?php echo home_url(); ?>/" rel="v:url" property="v:title">Home</a>
        <strong><?php echo get_the_title(10); ?></strong>


      <?php elseif( is_singular('post') ): ?>

        <a href="<?php echo home_url(); ?>/" rel="v:url" property="v:title">Home</a>
        <a href="<?php echo the_permalink(10); ?>/" rel="v:url" property="v:title"><?php echo get_the_title(10); ?></a>
        <strong><?php echo get_the_title(); ?></strong>

      <?php else : ?>
          <?php yoast_breadcrumb('',''); ?>
      <?php endif; ?>

    </div>
  </div><?php

endif;
?>
