<?php get_header() ;?>
  
  

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
      
      <p>SUCCESS</p>

    </div>
  </div>
  
<?php get_footer() ;?>

