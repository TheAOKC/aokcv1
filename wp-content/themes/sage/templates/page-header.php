<?php use Roots\Sage\Titles; ?>

<?php if( !is_front_page() ) : ?>

    <section class="page-title-wrapper">
        <div class="page-title">
            <h1><?= Titles\title(); ?></h1>
        </div>
    </section>

<?php endif; ?>

