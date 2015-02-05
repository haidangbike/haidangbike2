<?php get_header(); ?>
	<div id="main-container" class="container">
	<?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?>
		<h2 class="main-heading text-center">Giới thiệu về Xe Hải Đăng</h2>
		<div id="map-wrapper">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3729.1862053762748!2d106.698386!3d20.824186000000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a70733e0dd981%3A0x555ab1e45761c914!2zWGUgxJBp4buHbiBI4bqjaSDEkMSDbmc!5e0!3m2!1sen!2sus!4v1422531252175" width="100%" height="248" frameborder="0" style="border:0"></iframe>
		</div> <!-- End #map-wrapper -->
		
		<div class="row">
			<?php get_sidebar( 'sidebar-1' ); ?>
			<div class="col-sm-9">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="panel panel-smart">
					<div class="panel-heading">
						<h3 class="panel-title"><?php the_title(); ?></h3>
					</div>
					<div class="panel-body">
						<?php the_content(); ?>
					</div>
				</div>
				<?php endwhile; else: ?>
				<p><?php _e('Xin lỗi! không có nội dung liên quan nào được tìm thấy!'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
