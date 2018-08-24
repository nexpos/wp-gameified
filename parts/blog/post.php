<?php
/**
 * Post template part
 *
 * Template part used on the single page
 *
 * @package GameiFIed
 * @author Nick Exposito
 * @since 0.0.1
 */
?>

<section class="container">
  <div class="row">
    <?php if(has_post_thumbnail() ) : ?>
      <div class="col-10 col-centered single-blog-image">
        <?php the_post_thumbnail('blog_index'); ?>
      </div>
    <?php endif; ?>
  </div>
  <div class="row">
    <div class="col-10 col-centered single-blog-content sm-text-center">
      <h2><?php the_title(); ?></h2>
      <p><?php the_content(); ?></p>
    </div>
  </div>
</section>
