<?php
/**
 * Posts template part
 *
 * Template part used on the blog index page
 *
 * @package GameiFIed
 * @author Nick Exposito
 * @since 0.0.1
 */
?>
<section class="container">


<div class="row blog-index__post">
  <?php if( has_post_thumbnail() ) : ?>
    <div class="col-4">
      <?php the_post_thumbnail('blog_index'); ?>
    </div>
  <?php endif; ?>

  <div class="col-8 col-centered sm-text-center">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <p><?php the_excerpt(); ?></p>
  </div>
</div>

</section>
