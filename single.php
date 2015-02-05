<?php get_header(); ?>
	<div id="main-container" class="container">
		<div class="row">
		<?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?> <!-- End Breadcrumb -->
			<div class="col-md-9 panel-smart">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h2 class="main-heading2"><?php the_title(); ?></h2> <!-- End Main Heading -->
				Tác giả: <?php the_author();?>, Đăng ngày: <?php the_time('d/m/Y'); ?>
				<div class="row cat-intro">
					<div class="col-sm-12 cat-body">
						<?php the_content(' '); ?>
					</div>
				</div> <!-- End Intro -->
				
				<div class="share">
					<!-- AddThis Button BEGIN -->
					<div class="addthis_toolbox addthis_default_style ">
						<span style="color:#a9a9a9;">(Chia sẻ bài viết)</span>
						<a class="addthis_button_google_plusone_share"></a>
						<a class="addthis_button_facebook"></a>
						<a class="addthis_button_twitter"></a>
						<a class="addthis_button_zingme"></a>
						<a class="addthis_button_govn"></a>
						<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
						<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
					</div>
					<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5061d29b59813150"></script>
					<!-- AddThis Button END -->
				</div>
				
				<div class="product-info-box">
					<h4 class="heading">Có thể bạn quan tâm</h4>
					<div class="row">
						<?php
						$backup = $post; 
						$current = $post->ID; //current page ID
						
						global $post;
						$thisPost = get_post_type(); //current custom post
						$myposts = get_posts('numberposts=4&order=DESC&orderby=ID&post_type=' . $thisPost .  
						'&exclude=' . $current);
						
						$check = count($myposts);
						
						if ($check > 1 ) { ?>
						
						<?php   
							foreach($myposts as $post) :
							setup_postdata($post);
						?>
						<div id="related" class="col-md-3 col-sm-3">
							<div class="product-col">
								<li>
									<div class="image">
										<a href="" title="Ảnh sản phẩm">
											<?php if(has_post_thumbnail()) {
												the_post_thumbnail('single-post-thumbnail');
											}
											?>
										</a>
									</div>
									
									<div class="caption">
										<h4><?php the_title() ?></h4>
										<div class="description"><?php the_excerpt(50, '...'); ?></div>
										<div class="price">
											<span class="price-new"><?php echo get_post_meta($post->ID, 'gia_san_pham', true); ?></span>
										</div>
										<div class="cart-button button-group">
											<a href="<?php the_permalink();?>" title="Xem chi tiết bài viết"><button type="button" class="btn btn-cart">Xem chi tiết</button></a>
										</div>
									</div>
								</li>
							</div>
						</div><!-- #related -->
						<?php endforeach; ?>
						<?php
							$post = $backup; 
							wp_reset_query();
						?>
						<?php } ?>
					</div> <!-- Products Row Ends -->
				</div>
				
				<div class="col-md-12">
					<div id="comment">
						<h3>Thảo luận bài viết</h3>
						<hr>
						<?php comments_template(); ?>
					</div> <!-- End #comment -->
				</div>
				
				<?php endwhile; else: ?>
				<p><?php _e('Xin lỗi! không có nội dung liên quan nào được tìm thấy!'); ?></p>
				<?php endif; ?>
			</div>
		<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>
