<?php use Roots\Sage\Titles; ?>

<?php if( !is_front_page() ) : ?>

    <?php
        if( get_field('default_page_banner', 'option') ) {
            $pagebg = "background-image:url(". get_field('default_page_banner', 'option') .")";
        }
    ?>
    <section class="page-title-wrapper" >
        <div class="page-title" style="<?php echo $pagebg; ?>">
            <h1><?= Titles\title(); ?></h1>
        </div>
    </section>

<?php endif; ?>

