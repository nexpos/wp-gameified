<?php
  /**
   * The default blog / index template.
   */
  get_header(); ?>
<section class="container">
  <div class="row">
    <div class="col-12 text-center blog-index">
      <h1 style="color:#a5c882;">Read our blog</h1>
    </div>
  </div>


  <?php if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    get_template_part('parts/blog/posts');
  endwhile; ?>
  <div class="row">
     <div class="col-12 text-center">
       <?php the_posts_pagination( array('mid_size' => 2, 'prev_text' => '<i class="fa fa-angle-left"></i>', 'next_text' => '<i class="fa fa-angle-right"></i>') ); ?>
     </div>
  </div>
</section>
  <?php else : ?>

    <div class="row">
      <div class="col-12 text-center">
        <h2>Sorry, no posts have been found</h2>
      </div>
    </div>


<?php endif;
  get_footer();?>
