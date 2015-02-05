<?php get_header(); ?>
	<div id="main-container" class="container">
		<div class="row">
			<div class="col-md-9">
			<?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?> <!-- End Breadcrumb -->
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h2 class="main-heading2"><a href="<?php the_permalink();?>" title="<?php the_permalink();?>"><?php the_title(); ?></a></h2> <!-- End Main Heading -->
				<div class="row cat-intro">
					<div class="col-sm-3">
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/cat-thumb-img1.jpg" alt="Image" class="img-responsive img-thumbnail"> -->
						<?php the_post_thumbnail( 'single-post-thumbnail' ); ?>
					</div>
					<div class="col-sm-9 cat-body">
						<p>
							<?php the_content(' '); ?>
						</p>
					</div>
				</div> <!-- Category Intro Content Ends -->
				<?php endwhile; else: ?>
				<p><?php _e('Xin lỗi! không có nội dung liên quan nào được tìm thấy!'); ?></p>
				<?php endif; ?>
				<?php wp_pagination(); ?>
			</div>
		<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>
