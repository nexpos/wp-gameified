<?php

/*-----------------------------------------------------------------------------
  Get featured image as url
-----------------------------------------------------------------------------*/
function featuredURL($size = 'full'){
  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size );
  $url = $thumb['0'];
  echo $url;
}

/*-----------------------------------------------------------------------------
  Adds thumbnail support and additional thumbnail sizes
-----------------------------------------------------------------------------*/

if( function_exists('prelude_features') ){
  // Use add_image_size below to add additional thumbnail sizes
  add_image_size( 'home-hero', 2800, 1800, array() );
  add_image_size( 'icon', 100, 88, array() );
  add_image_size( 'split-img', 1200, 1100, array('center', 'center') );
  add_image_size( 'cta-img', 2800, 300, array('center', 'center') );
}
