<?php
/**
 * Site Footer
 *
 * @package GameiFIed
 * @author Nick Exposito
 * @since 0.0.1
 */
 ?>

<footer class="site-footer">
  <hr>
  <div class="container">
    <div class="row row--align-items-center footer-row">
      <div class="col-3 temp-logo">
        <!-- Temporary Logo -->
        <h2>GameiFIed<h2>
        <!-- <img class="footer-logo" src="<?php //echo //get_template_directory_uri(); ?>/assets/img/footer_logo.png" alt="contract moxie logo"> -->
      </div>
      <div class="col-6">
        <?php // Footer Menu
        wp_nav_menu( array('theme_location' => 'footer', 'container' => 'nav', 'container_class' => 'nav--footer') ); ?>
      </div>
    </div>

    <div class="row row--full-width">
      <div class="col-12 text-center site-info">
        <p>&copy; <?php echo date('Y') . ' ' . get_bloginfo('name'); ?></p>

        <p>Site by <a href="http://www.nickexposito.com" class="factor1">Nick Exposito</a></p>
      </div>
    </div>
  </div>
</footer>
