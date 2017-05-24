<?php
/**
 * Template Name: Shop
 */
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/page', 'header'); ?>

    <div class="shop-page">

        <!-- start products-section -->
        <section class="products-section section-padding">
            <div class="container">
                <div class="row products-grids">
                    <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder-info-list">
                                <div class="img-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/img-4.jpg" alt class="img img-responsive">
                                </div>
                                <div class="info-list">
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-1.png" alt></a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-2.png" alt></a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-3.png" alt></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3><a href="<?php echo get_the_permalink(80); ?>">Splash Toy</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="price">$15.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder-info-list">
                                <div class="img-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/img-5.jpg" alt class="img img-responsive">
                                </div>
                                <div class="info-list">
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-1.png" alt></a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-2.png" alt></a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-3.png" alt></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3><a href="<?php echo get_the_permalink(80); ?>">Splash Toy</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="price">$15.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder-info-list">
                                <div class="img-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/img-6.jpg" alt class="img img-responsive">
                                </div>
                                <div class="info-list">
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-1.png" alt></a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-2.png" alt></a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-3.png" alt></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3><a href="<?php echo get_the_permalink(80); ?>">Splash Toy</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="price">$15.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder-info-list">
                                <div class="img-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/img-7.jpg" alt class="img img-responsive">
                                </div>
                                <div class="info-list">
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-1.png" alt></a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-2.png" alt></a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-3.png" alt></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3><a href="<?php echo get_the_permalink(80); ?>">Splash Toy</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="price">$15.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder-info-list">
                                <div class="img-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/img-8.jpg" alt class="img img-responsive">
                                </div>
                                <div class="info-list">
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-1.png" alt></a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-2.png" alt></a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-3.png" alt></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3><a href="<?php echo get_the_permalink(80); ?>">Splash Toy</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="price">$15.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder-info-list">
                                <div class="img-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/img-10.jpg" alt class="img img-responsive">
                                </div>
                                <div class="info-list">
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-1.png" alt></a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-2.png" alt></a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-3.png" alt></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3><a href="<?php echo get_the_permalink(80); ?>">Splash Toy</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="price">$15.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder-info-list">
                                <div class="img-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/img-11.jpg" alt class="img img-responsive">
                                </div>
                                <div class="info-list">
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-1.png" alt></a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-2.png" alt></a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-3.png" alt></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3><a href="<?php echo get_the_permalink(80); ?>">Splash Toy</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="price">$15.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder-info-list">
                                <div class="img-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/img-12.jpg" alt class="img img-responsive">
                                </div>
                                <div class="info-list">
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-1.png" alt></a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-2.png" alt></a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-3.png" alt></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3><a href="<?php echo get_the_permalink(80); ?>">Splash Toy</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="price">$15.00</span>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder-info-list">
                                <div class="img-holder">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/img-9.jpg" alt class="img img-responsive">
                                </div>
                                <div class="info-list">
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-1.png" alt></a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-2.png" alt></a>
                                    </div>
                                    <div>
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/shop/icons/icon-3.png" alt></a>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <h3><a href="<?php echo get_the_permalink(80); ?>">Splash Toy</a></h3>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <span class="price">$15.00</span>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->

                <div class="pagination-wrapper">
                    <ul>
                        <li>
                            <a href="#" aria-label="Previous">
                                <i class="fa fa-angle-double-left"></i>
                            </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <i class="fa fa-angle-double-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end products-section -->

    </div>


<?php endwhile; ?>
