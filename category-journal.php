<?php get_header() ;?>
  
<div class="development">category-journal.php</div>
<section class="row posts">
  <div class="small-12 medium-8 columns">
      <?php 

        if (have_posts()) :
           while (have_posts()) :
              the_post();?>
                <hr>
                <h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                <?php
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

