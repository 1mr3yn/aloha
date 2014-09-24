<?php
  
  get_header();

  if ( have_posts() ):
     the_post(); 
  ?>
    <div class="container">
       <div class="row">
         <div class="col-md-12"><?php echo the_content(); ?> <hr> <hr> <?php echo the_content(); ?> <hr> <?php echo the_content(); ?></div>
       </div>
    </div>
    <div class="container">
       <div class="row">
         <div class="col-md-12"><?php echo the_content(); ?> <hr> <hr> <?php echo the_content(); ?> <hr> <?php echo the_content(); ?></div>
       </div>
    </div>
    <div class="container">
       <div class="row">
         <div class="col-md-12"><?php echo the_content(); ?> <hr> <hr> <?php echo the_content(); ?> <hr> <?php echo the_content(); ?></div>
       </div>
    </div>
    <div class="container">
       <div class="row">
         <div class="col-md-12"><?php echo the_content(); ?> <hr> <hr> <?php echo the_content(); ?> <hr> <?php echo the_content(); ?></div>
       </div>
    </div>
 
 <?php
   else :   
      echo 'None';
   endif;

 get_footer(); 
?>