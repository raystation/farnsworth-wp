<?php //include get_bloginfo('template_url').'functions.php';?>
	<footer class="row">
		<hr>
		<div class="small-12 medium-3 columns">
			farnsworth
			address
			phone
		</div>
		<div class="small-12 medium-3 columns">
			<?php printStoreOpen(); ?>
		</div>

		<div class="small-12 medium-3 columns end">
			<?php listStoreHours(); ?>
		</div>
		
	</footer>


    <script src="<?php echo get_bloginfo('template_url') ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo get_bloginfo('template_url') ?>/bower_components/foundation/js/foundation.min.js"></script>
    <script src="<?php echo get_bloginfo('template_url') ?>/assets/js/app.js"></script>
  </body>
</html>