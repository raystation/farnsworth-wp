<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation</title>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/assets/css/style.css" />
    <script src="<?php echo get_bloginfo('template_url') ?>/bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>

    <header class="row">
      <div class="small-8 columns">
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/logo.jpg" alt="">
      </div>
      <nav class="small-4 columns">
        
        <?php //main menu 
          wp_nav_menu(
            array(
              "main-menu" => "Main Menu",
              "container" => "ul"
            )
          );
        ?>

<!--         <ul>
          <li><a href="#">1stdibs</a></li>
          <li><a href="inventory">Inventory</a></li>
          <li><a href="contact">Contact</a></li>
          <li><a href="journal">Journal</a></li>
        </ul> -->
      </nav>
    </header> 