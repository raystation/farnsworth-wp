<?php //include get_bloginfo('template_url').'functions.php';?>
	<footer class="row">
		
		<div class="small-12 columns">
			<hr>
		</div>

		<div class="small-12 medium-3 columns">
			<p class="add-bottom">Farnsworth <br>
			Valencia St. <br>
			415-999-8888 </p>
			<p><?php printStoreOpen(); ?></p>
		</div>
		<div class="small-12 medium-3 columns">
			<?php listStoreHours(); ?>
		</div>

		<div class="small-12 medium-3 columns end">
			<a href="http://www.1stdibs.com/dealers/farnsworth/" target='_blank'>Farnsworth on 1stdibs</a> <br>
			Twitter <br>
			Facebook <br>
			Instagram
		</div>
		
	</footer>


    <script src="<?php echo get_bloginfo('template_url') ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo get_bloginfo('template_url') ?>/bower_components/foundation/js/foundation.min.js"></script>
    <script src="<?php echo get_bloginfo('template_url') ?>/assets/js/app.js"></script>
    <script src="<?php echo get_bloginfo('template_url') ?>/assets/js/slick.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.slideshow').slick({
			  accessibility: true,
			  lazyLoad: 'progressive',
			  autoplay: true,
			  autoplaySpeed: 4500,
			  arrows: true
			  // dots: true
			});
		});		
	</script>
	<?php get_dev(false,true);?>
  </body>
</html>