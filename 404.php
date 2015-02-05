<?php get_header(); ?>
	<div id="main-container" class="container">
		<?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?>
		<div class="content-box text-center">
			<h4 class="special-heading">404 !</h4>
			<h5>
				Không tìm thấy trang, hãy kiểm tra lại URL!
			</h5>
			<br>
			<p>
				<a href="<?php bloginfo('home') ?>" class="btn btn-warning text-uppercase">Trở lại trang chủ</a>
			</p>
		</div>
	</div>
<?php get_footer(); ?>
