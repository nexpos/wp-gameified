<?php
/**
 * Site Header
 *
 * @package GameiFIed
 * @author Nick Exposito <www.nickexposito.com>
 * @since 0.0.1
 */
 ?>

<header class="container site-header">
    <div class="row row--align-items-center row--full-width sm-hide">
      <div class="col-6 sm-col-4">
        <?php // Logo ?>
        <a href="<?php echo esc_url(home_url()); ?>">
          <img class="header-logo" src="<?php //echo get_template_directory_uri(); ?>/assets/img/white_logo.png" alt="GameiFIed Logo">
        </a>
      </div>
      <div class="col-6">
        <?php // Primary Menu
        wp_nav_menu( array('theme_location' => 'utility', 'container' => 'nav', 'container_class' => 'nav--utility') ); ?>
      </div>
    </div>

  <div class="container site-header__mobile sm-only">
    <div class="row">
      <div class="col-5" style="display:flex; align-items:center;">
        <?php // Logo ?>
        <a href="<?php echo esc_url(home_url()); ?>">
          <img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/white_logo.png" alt="GameiFIed Logo">
        </a>
      </div>
      <div class="menu-icon sm-only">
        <a id="nifty-nav-toggle" class="nifty-hamburger"><span></span></a>
      </div>
    </div>
  </div>
</header>

<div class="nifty-panel text-center">
    <?php // Mobile Menu
    wp_nav_menu( array('theme_location' => 'mobile', 'container' => 'nav', 'container_class' => 'nav--mobile') ); ?>
</div>
