<?php
/*
	Template Name: Xe máy điện
*/
get_header(); ?>
	<div id="main-container" class="container">
		<div class="row">
			<div class="col-md-9">
				<?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?>
				<h2 class="product-head">Xe máy điện</h2>
				<div class="row">
					<?php
						$args = array(
						'post_type'=> 'sanpham',
						'taxonomy' => 'products',
						'products' => 'xe-may-dien',
						'order'    => 'DESC',
						'showposts'=> 10
					);
					// The Query
					//query_posts( $args );
					$query = new WP_Query($args);
					
					// The Loop
					while ( $query->have_posts() ) : $query->the_post(); ?>
					<div class="col-md-4 col-sm-6">
						<div class="product-col">
							<div class="image">
								<a href="<?php the_permalink();?>" alt="product">
								<!--<p class="ribbon">ribbon</p>-->
									<?php if(has_post_thumbnail()){
										the_post_thumbnail('single-post-thumbnail');
									}
									?>
								</a>
							</div> <!-- End .image -->
							<div class="caption">
								<h4><a href="<?php the_permalink();?>" title="Tiêu đề sản phẩm"><?php the_title() ?></a></h4>
								<div class="price">
									<span class="price-new"><?php echo get_post_meta($post->ID, 'gia_san_pham', true); ?></span> 
									<!-- <span class="price-old">$249.50</span> -->
								</div>
								<div class="cart-button button-group">
									<a href="<?php the_permalink();?>" title="Xem chi tiết sản phẩm">
										<button class="btn btn-cart" type="button">
											Xem chi tiết
										</button>
									</a>
								</div>
							</div>
						</div>
					</div> <!-- Product #1 Ends -->
					<?php
						endwhile;
					?>
				</div> <!-- Product Grid Display Ends -->
			</div>
			<?php get_sidebar() ;?>
		</div>
	</div>
<?php get_footer(); ?>
