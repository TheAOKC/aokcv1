<?php if( !is_front_page() ) : ?>
<section class="impact-hero">
  <div class="container">
    <div class="row section-title">
      <h2>Make an impact</h2>
      <p>Join us with a recurring donation and you
        can help transform lives every month</p>

      <a href="https://www.nowdonate.com/checkout/030h33cigpx6wg684ot8" class="btn btn-primary" target="_blank">Give NOw</a>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- start cta -->
<section class="cta parallax" data-bg-image="images/cta-bg.jpg" data-speed="3">
  <div class="container">
    <div class="row">
      <div class="col col-md-8 left-col">
        <h3>Become part of something <span>Bigger</span> than yourself</h3>
      </div>
      <div class="col col-md-4">
        <form class="form">
          <div class="text-fild">
            <input type="text" class="form-control" placeholder="email address..">
            <button type="submit" class="submit-btn"><i class="fa fa-arrow-right"></i></button>
          </div>
          <div class="notify-message">
            <input type="checkbox" id="notify">
            <label for="notify"> Notify me only about the updates</label>
          </div>
        </form>
      </div>
    </div> <!-- end row -->
  </div> <!-- end container -->
</section>
<!-- end cta -->

<!-- start footer -->
<footer class="site-footer site-footer-2">
  <div class="container">

    <?php
      if (has_nav_menu('footer_navigation')) :
        wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'list-inline', 'container' => false]);
      endif;
    ?>

    <p class="copyright">&copy; <?php echo date("Y"); ?> Acts of Kindness Collection (UK Registered Charity No. 1146796). All right reserved</p>

    <div class="site-footer-bottom">
      <ul class="social-links">
        <li><a href="https://www.facebook.com/TheActsofKindnessCollective/" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://www.instagram.com/theaokc/" target="_blank"><i class="fa fa-instagram"></i></a></li>
      </ul>
    </div>
  </div> <!-- end container -->
</footer>
<!-- end footer -->
</div>
<!-- end of page-wrapper -->