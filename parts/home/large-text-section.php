<?php
/**
 * Large Text Section
 *
 * Template part used globally
 *
 * @package GameiFIed
 * @author Nick Exposito
 * @since 0.0.1
 */
// Large Text Custom Fields
$smallHeadline = get_field('small_headline');
$normalHeadline = get_field('why_headline');
$aboutContent = get_field('default_content');
$buttonToggle = get_field('button_toggle');
$largeButton = get_field('large_button');
 ?>

<section class="container">
  <div class="row">
    <div class="col-10 col-centered text-center large-headlines">
      <h6><?php echo $smallHeadline; ?></h6>
      <h2 class="thunder"><?php echo $normalHeadline; ?></h2>
    </div>
  </div>
  <div class="row">
    <div class="col-10 col-centered columns">
      <div>
        <?php echo $aboutContent; ?>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 text-center">
      <? if( $buttonToggle ) : ?>
      <div class="">
        <a href="<?php echo $largeButton['url']; ?>" class="button button--primary" role="link" title="<?php echo $largeButton['title']; ?>">
        <?php echo $largeButton['title']; ?>
        </a>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
