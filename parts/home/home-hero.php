<?php
/**
 * Home Hero
 *
 * Template part used on the home template
 *
 * @package GameiFIed
 * @author Nick Exposito
 * @since 0.0.1
 */
// Home Hero Custom Fields
$hero_image = wp_get_attachment_image_src(get_field('home_hero_background_image'), 'home-hero');
$hero_header = get_field('home_hero_header');
$home_content = get_field('home_content');
$btnToggle = get_field('button_toggle');
$homeButton = get_field('home_button'); ?>

<section class="container home-hero" style="background: url('<?php echo $hero_image[0]; ?>') center/cover no-repeat">
<div class="container home-hero__content">
  <div class="row">
    <div class="col-6 sm-text-center">
      <div class="">
        <h1><?php echo $hero_header; ?></h1>
      </div>
        <div class="">
          <?php echo $home_content; ?>
        </div>
        <div class="home-button">
          <? if( $btnToggle ) : ?>
            <a href="<?php echo $homeButton['url']; ?>" class="button button--secondary" role="link" title="<?php echo $homeButton['title']; ?>">
            <?php echo $homeButton['title']; ?>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
