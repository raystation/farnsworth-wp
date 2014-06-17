<?php get_header() ;?>
  
<section class="row">
  <div class="small-12 columns">
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/florence-knoll.jpg" alt="" class="scale-with-grid">
  </div>
</section>

<section class="row">
  <hr>
  <div class="small-12 medium-3 columns">
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/credenza.jpg" alt="" class="scale-with-grid">
  </div> 
  <div class="small-12 medium-3 columns">
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/credenza.jpg" alt="" class="scale-with-grid">
  </div> 
  <div class="small-12 medium-3 columns">
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/credenza.jpg" alt="" class="scale-with-grid">
  </div> 
  <div class="small-12 medium-3 columns">
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/credenza.jpg" alt="" class="scale-with-grid">
  </div>          
</section>

<section class="row">
  <div class="small-8 columns">
      <?php 
        if (have_posts()) :
        while (have_posts()) :
        the_post();
           the_content();
        endwhile;
        endif; 
      ;?>    
  </div>
</section>

<?php get_footer() ;?>

