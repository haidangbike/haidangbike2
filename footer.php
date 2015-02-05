	<footer id="footer-area">
		<?php get_sidebar( 'footer' ); ?>
		
		<div class="copyright">
			<div class="container">
				<p class="pull-left">
					&copy; <?php bloginfo('name') ?> <?php echo date('Y'); ?>. All Rights Reserved.<br>
					Giấy chứng nhận Đăng ký Kinh doanh số: 02O80012609/HKD <br> Do UBND Quận Dương Kinh - TP. Hải Phòng cấp ngày 30/10/2013
				</p>
				<p class="pull-right">
					Site by: <a href="#" title="cau28x" target="_blank">cau28x.net</a>
				</p>
			</div>
		</div>
	</footer> <!-- End Footer -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-migrate-1.2.1.min.js"></script>	
	<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
	<script>
		$('#myCarousel').carousel({
			interval:   4000
		});
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-42393326-1', 'xehaidang.com');
	  ga('send', 'pageview');
	</script>
	<?php wp_footer(); ?>
</body>
</html>
