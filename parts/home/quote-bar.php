<?php
/**
 * Quote Bar
 *
 * Template part used on the home page
 *
 * @package GameiFIed
 * @author Nick Exposito
 * @since 0.0.1
 */
$banner_image = wp_get_attachment_image_src(get_field('banner_image_background'),'cta-img');
// WP Query arguments
$args = array(
  'post_type' => 'simple_testimonials',
  'posts_per_page' => 1,
  'orderby' => 'date',
);
// WP Query
$testimonials = new WP_Query($args);
if( $testimonials->have_posts() ) : while( $testimonials->have_posts() ) : $testimonials->the_post();
  // Testimonials Custom Fields
  $testimonial = get_field('testimonial');
  $citation = get_field('citation'); ?>

  <section class="container banner-image" style="background: url('<?php echo $banner_image[0]; ?>') center/cover no-repeat">
    <div class="row">
      <div class="col-10 col-centered sm-text-center testimonials-text">
        <div><?php echo $testimonial; ?></div>
        <p class="testimonial-author"><?php echo $citation; ?></p>
      </div>
    </div>
  </section>
  <?php endwhile; endif; wp_reset_postdata(); ?>
