<?php get_header() ;?>
<div class="development">page.php</div>  

<div class="row">
  <div class="small-12 columns">
    <?php 
      if (have_posts()) :
      while (have_posts()) :
      the_post();
         the_content();
      endwhile;
      endif; 
    ;?>
  </div>
  <div class="medium-4 columns small-12">
    <?php get_sidebar() ;?>
  </div>
</div>
  
<?php get_footer() ;?>

