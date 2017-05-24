<?php use Roots\Sage\Titles; ?>
<?php if( !is_front_page() ) : ?>

    <!-- start page-title-wrapper -->
    <section class="page-title-wrapper">
        <div class="page-title">
            <h1><?= Titles\title(); ?></h1>
        </div>
    </section>
    <!-- end page-title-wrapper -->

<?php endif; ?>

