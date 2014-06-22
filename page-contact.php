<?php get_header() ;?>
<div class="development">page-contact.php</div>  

<div class="row">
  <div class="small-12 medium-8 columns posts">
    <hr>
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

