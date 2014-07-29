<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Farnsworth | <?php echo the_title(); ?></title>
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/assets/css/style.css" />
	<script src="<?php echo get_bloginfo('template_url') ?>/bower_components/modernizr/modernizr.js"></script>
</head>
<body>
	<header class="row">
	<div class="small-12 medium-6 columns">
		<a href="<?php echo get_bloginfo('wpurl') ;?>"><img src="<?php echo get_bloginfo('template_url') ?>/assets/img/logo/white-logotype.svg" alt="" class="scale-with-grid"></a>
	</div>

	<nav class="small-12 medium-6 columns">
		<?php 
			//MAIN MENU
			wp_nav_menu(
				array(
					"main-menu" => "Main Menu",
					"container" => "ul",
					"menu_class" => "vertical-align",
					"menu_id" => "menu",

				)
			);
        ?>
      </nav>

      <div class="small-12 columns">
		<?php bloginfo( "description" ); ?> 
      </div>

    </header> 
