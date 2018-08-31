<?php
/**
 * Global Hero
 *
 * Template part used globally
 *
 * @package GameiFIed
 * @author Nick Exposito
 * @since 0.0.1
 */
// Home Hero Custom Fields
$hero_image = wp_get_attachment_image_src(get_field('default_hero_background_image'), 'home-hero');
$hero_header = get_field('default_hero_header'); ?>

<section class="container default-hero" style="background: url('<?php echo $hero_image[0]; ?>') center/cover no-repeat">
  <div class="container default-hero__content">
    <div class="row">
      <div class="col-6">
        <div class="">
          <h1><?php echo $hero_header; ?></h1>
        </div>
      </div>
    </div>
  </div>
</section>
