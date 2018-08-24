<?php
  /**
   * The single post template.
   *
   * Used when a single post is queried.
   */
  get_header();

  if( have_posts() ):

    while( have_posts() ): the_post();

    get_template_part('parts/blog/post');

    endwhile;

  endif;

  get_footer();
