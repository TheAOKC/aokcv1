<?php get_template_part('templates/page', 'header'); ?>

<div class="page-404">
  <div class="container">
    <h1>404</h1>
    <h3>PAGE NOT FOUND</h3>
    <p>It looks like nothing was found at this location. </p>

    <a class="btn btn-primary" href="<?= esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">Go back to home</a>
  </div>
</div>

