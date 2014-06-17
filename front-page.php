<?php 
//single post page
get_header() ;?>
  
<section class="row posts">
  <div class="small-12 columns">
      <?php the_post(); the_content(); ;?> 
  </div>
  <div class="small-12 columns">
    
  </div>

</section>

<?php get_footer() ;?>

