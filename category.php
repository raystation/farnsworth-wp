<?php get_header() ;?>
<div class="development">category.php</div>

<div class="row">
  <div class="small-12 columns">
    <hr>
      <h3><?php single_cat_title();?></h3>
  </div>
</div>
        
<div class="row add-bottom">

<?php
  $count=0;
  if ( have_posts()) :
     while (have_posts()) : the_post();?>
        <?php 
          $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail');
          $url = $thumb['0'];

          ;?>
          <!-- <div class="small-6 medium-3 columns"><img class="scale-with-grid" src="<?php echo firstImage();?>"></div>   -->
          <div class="small-2 desktop columns"><a href="<?php the_permalink(); ?>"><img class="scale-with-grid" src="<?php echo $url;?>"></a></div>  
            
            <!-- <h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4> -->

            <?php
            $count++;

            if ($count==6) { ?>
          </div>
          <div class="row add-bottom <?php if ( $count < 6 ) { echo "end"; }; ?>">

        <?php }

          // the_content();
     endwhile;
  endif;

;?>

<?php //to-do: second loop just for mobile thumbnails ;?>


  </div>
</div>

<?php get_footer() ;?>

