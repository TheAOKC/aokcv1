<?php
/**
 * Template Name: Wishlist
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>

<section class="section-padding">
    <div class="container">
        <div class="row section-title">
            <div class="col col-md-8 col-md-offset-2">
                <h3>The Wishlist</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, accusantium at debitis deleniti provident reprehenderit! Aliquid dolores eius eveniet non nostrum placeat, tenetur voluptate. Eos facere magnam maxime quas voluptate!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium at dolorem eaque eius eos error hic id in inventore, molestias odio quod similique sunt. Adipisci alias corporis dolorum in natus!</p>
            </div>
        </div>
    </div>
</section>



<!-- start charity-categories-section -->
<section class="charity-categories-section section-padding">
    <div class="container">
        <div class="row section-title">
            <div class="col col-md-8 col-md-offset-2">
                <blockquote>“We noticed that no other non-profits are doing this, and thought it was even a radical idea when we came up with it. But maybe it’s not that radical at all, maybe it’s the way it should be...maybe it’s just right!”</blockquote>
            </div>
        </div> <!-- end section-title -->

        <div class="row charity-categories-section-grids">
            <div class="col col-md-4 col-sm-6">
                <div class="grid">
                    <div class="icon">
                        <i class="fi flaticon-sprout"></i>
                    </div>
                    <div class="info">
                        <h3>VIDEO PRODUCTION</h3>
                        <p>Icididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation..</p>
                        <a href="https://www.nowdonate.com/checkout/b448w5mw8m3ko06i8oy4" class="details" target="_blank">I wish to help</a>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 col-sm-6">
                <div class="grid">
                    <div class="icon">
                        <i class="fi flaticon-house"></i>
                    </div>
                    <div class="info">
                        <h3>PROVIDE AN INTRODUCTION</h3>
                        <p>Icididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation..</p>
                        <a href="https://www.nowdonate.com/checkout/b448w5mw8m3ko06i8oy4" class="details" target="_blank">I wish to help</a>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 col-sm-6">
                <div class="grid">
                    <div class="icon">
                        <i class="fi flaticon-hot-air-baloon-flying"></i>
                    </div>
                    <div class="info">
                        <h3>NYC CONCERT SPACE</h3>
                        <p>Icididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation..</p>
                        <a href="https://www.nowdonate.com/checkout/b448w5mw8m3ko06i8oy4" class="details" target="_blank">I wish to help</a>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 col-sm-6">
                <div class="grid">
                    <div class="icon">
                        <i class="fi flaticon-water"></i>
                    </div>
                    <div class="info">
                        <h3>LIQUOR SPONSORSHIP</h3>
                        <p>Icididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation..</p>
                        <a href="https://www.nowdonate.com/checkout/b448w5mw8m3ko06i8oy4" class="details" target="_blank">I wish to help</a>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 col-sm-6">
                <div class="grid">
                    <div class="icon">
                        <i class="fi flaticon-medical-1"></i>
                    </div>
                    <div class="info">
                        <h3>CELEBRITY TWEET</h3>
                        <p>Icididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation..</p>
                        <a href="https://www.nowdonate.com/checkout/b448w5mw8m3ko06i8oy4" class="details" target="_blank">I wish to help</a>
                    </div>
                </div>
            </div>
            <div class="col col-md-4 col-sm-6">
                <div class="grid">
                    <div class="icon">
                        <i class="fi flaticon-global-warming"></i>
                    </div>
                    <div class="info">
                        <h3>T-SHIRTS</h3>
                        <p>Icididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation..</p>
                        <a href="https://www.nowdonate.com/checkout/b448w5mw8m3ko06i8oy4" class="details" target="_blank">I wish to help</a>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->
    </div> <!-- end container -->
</section>
<!-- end charity-categories-section -->



<?php endwhile; ?>
