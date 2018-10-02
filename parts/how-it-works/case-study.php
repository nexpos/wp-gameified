<?php
/**
 * Case Study
 *
 * Template part used on the How It Works Template
 *
 * @package GameiFIed
 * @author Nick Exposito
 * @since 0.0.1
 */
 $caseStudy = get_field('case_study');
 ?>

 <section class="container">
   <div class="row">
     <div class="col-10 col-centered text-center">
       <h2>SUBMIT YOUR CASE STUDY BELOW</h2>
     </div>
   </div>
   <div class="row">
     <div class="col-10 col-centered">
       <div class="case-study__form">
         <?php echo $caseStudy; ?>
       </div>
     </div>
   </div>
 </section>
