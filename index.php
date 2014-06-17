<?php get_header() ;?>
  
<section class="row">
  <div class="small-12 medium-8 columns">
      <?php 
        if (have_posts()) :
        while (have_posts()) :
        the_post();
           the_content();
        endwhile;
        endif; 
      ;?>    
  </div>
  <div class="medium-4 columns small-12 sidebar">
    <?php get_sidebar() ;?>
  </div>

</section>

<?php get_footer() ;?>

