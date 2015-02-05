<?php get_header(); ?>
	<div class="slider">
		<div class="container">
			<div id="main-carousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="item active">
						<img src="<?php echo get_template_directory_uri(); ?>/images/slide1.jpg" alt="Slider" class="img-responsive">
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/slide2.jpg" alt="Slider" class="img-responsive">
					</div>
					<div class="item">
						<img src="<?php echo get_template_directory_uri(); ?>/images/slide3.jpg" alt="Slider" class="img-responsive">
					</div>
				</div>
			</div>				
		</div>
	</div> <!-- Slider Section Ends -->
	
	<div class="col3-banners">
		<div class="container">
			<ul class="row list-unstyled">
				<li class="col-sm-4">
					<a href="<?php bloginfo('home') ?>/xe-dap-dien" title="Xe máy điện"><img src="<?php echo get_template_directory_uri(); ?>/images/3col-banner1.jpg" alt="banners" class="img-responsive"></a>
				</li>
				<li class="col-sm-4">
					<a href="<?php bloginfo('home') ?>/xe-may-dien" title="Xe đạp điện"><img src="<?php echo get_template_directory_uri(); ?>/images/3col-banner2.jpg" alt="banners" class="img-responsive"></a>
				</li>
				<li class="col-sm-4">
					<a href="<?php bloginfo('home') ?>/phu-kien-xe-dien" title="Phụ kiện xe điện"><img src="<?php echo get_template_directory_uri(); ?>/images/3col-banner3.jpg" alt="banners" class="img-responsive"></a>
				</li>
			</ul>
		</div>
	</div> <!-- 3 Column Banners Ends -->
	
	<section class="products-list">			
		<div class="container">
			<h2 class="product-head">Xe máy điện</h2>
			<div class="row">
				<?php
					$args = array(
					'post_type'=> 'sanpham',
					'taxonomy' => 'products',
					'products' => 'xe-may-dien',
					'order'    => 'DESC',
					'showposts'=> 4
				);
				// The Query
				//query_posts( $args );
				$query = new WP_Query($args);
				
				// The Loop
				while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-md-3 col-sm-6">
					<div class="product-col">
						<div class="image">
							<a href="<?php the_permalink();?>" alt="product">
								<?php if(has_post_thumbnail()){
									the_post_thumbnail('single-post-thumbnail');
								}
								?>
							</a>
						</div>
						<div class="caption">
							<h4><a href="<?php the_permalink();?>"><?php the_title() ?></a></h4>
							<div class="description">
								<?php the_excerpt(); ?>
							</div>
							<div class="price">
								<span class="price-new">$199.50</span>
								<span class="price-old">$249.50</span>
							</div>
							<div class="cart-button button-group">
								<a href="<?php the_permalink();?>"><button type="button" class="btn btn-cart">Xem chi tiết</button></a>
							</div>
						</div>
					</div>
				</div> <!-- Product #1 Ends -->
				<?php
					endwhile;
				?>
			</div>
		</div>
	</section>
	
	<section class="products-list">
		<div class="container">
			<h2 class="product-head">Xe đạp điện</h2>
			<div class="row">
				<?php
					$args = array(
					'post_type'=> 'sanpham',
					'taxonomy' => 'products',
					'products' => 'xe-dap-dien',
					'order'    => 'DESC',
					'showposts'=> 4
				);
				// The Query
				//query_posts( $args );
				$query = new WP_Query($args);
				
				// The Loop
				while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="col-md-3 col-sm-6">
					<div class="product-col">
						<div class="image">
							<a href="<?php the_permalink();?>" alt="product">
								<?php if(has_post_thumbnail()){
									the_post_thumbnail('single-post-thumbnail');
								}
								?>
							</a>
						</div>
						<div class="caption">
							<h4><a href="<?php the_permalink();?>"><?php the_title() ?></a></h4>
							<div class="description">
								<?php the_excerpt(); ?>
							</div>
							<div class="price">
								<span class="price-new"><?php echo get_post_meta($post->ID, 'gia_san_pham', true); ?> VNĐ</span>
								<!-- <span class="price-old">$249.50</span> -->
							</div>
							<div class="cart-button button-group">
								<a href="<?php the_permalink();?>"><button type="button" class="btn btn-cart">Xem chi tiết</button></a>
							</div>
						</div>
					</div>
				</div> <!-- Product #1 Ends -->
				<?php endwhile; ?>
			</div>
		</div>
	</section>
	
	<div class="col2-banners">
		<div class="container">
			<ul class="row list-unstyled">
				<li class="col-sm-4">
					<a href="#" title="Miễn phí vận chuyển"><img src="<?php echo get_template_directory_uri(); ?>/images/2col-banner1.png" alt="banners" class="img-responsive"></a>
				</li>
				<li class="col-sm-8">
					<a href="#" title="Khuyến mại"><img src="<?php echo get_template_directory_uri(); ?>/images/2col-banner2.jpg" alt="banners" class="img-responsive"></a>
				</li>
			</ul>
		</div>
	</div> <!-- End .col2-banners -->
<?php get_footer(); ?>
