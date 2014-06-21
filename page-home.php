<?php get_header() ;?>
<div class="development">page-home.php</div>    
<section class="row">
  <div class="small-12 columns">
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/florence-knoll.jpg" alt="" class="scale-with-grid">
  </div>
</section>

<div class="row">
  <div class="small-12 columns">
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
</div>

<?php get_footer() ;?>

