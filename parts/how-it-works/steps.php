<?php
/**
 * Steps
 *
 * Template part used on the How It Works Template
 *
 * @package GameiFIed
 * @author Nick Exposito
 * @since 0.0.1
 */
 $blockHeader = get_field('main_headline');
 ?>


<div class="container">
	<div class="row row--align-items-center">
	  <div class="col-12 text-center">
	    <h2 class="block__header"><?php echo $blockHeader; ?></h2>
	  </div>
	</div>
		<div class="row">
      <?php if( have_rows('content_squares')): ?>
       <?php while( have_rows('content_squares')): the_row();
			 $block_headline = get_sub_field('block_headline');
			 $block_content = get_sub_field('block_content');
			 ?>
      <div class="col-4 stretch">
        <div class="content__block text-center">
          <i class="fas fa-check-circle"></i>
          <h3> <?php echo $block_headline; ?></h3>

          <div><?php echo $block_content; ?></div>

        </div>
      </div>
       <?php endwhile; ?>
      <?php endif; ?>
		</div>
</div>
