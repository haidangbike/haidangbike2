<?php get_header(); ?>
	<div id="main-container" class="container">
		<?php if(function_exists('rdfa_breadcrumb')){ rdfa_breadcrumb(); } ?> <!-- End Breadcrumb -->
		<!-- Product Info Starts -->
		<div class="row product-info full">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="col-sm-4 images-block">
				<a href="<?php the_permalink();?>" class="thumbnails" title="Ảnh sản phẩm">
					<?php if(has_post_thumbnail()) {
						the_post_thumbnail('medium');
					}
					?>
				</a>
			</div> <!-- Left Ends -->
			
			<div class="col-sm-8 product-details">
				<div class="panel-smart">
					<h2><?php the_title() ?></h2>
					<hr>
					<ul class="list-unstyled manufacturer">
						<li><span>Mã SP:</span> <strong class="label label-danger"><?php echo get_post_meta($post->ID, 'ma_san_pham', true); ?></strong></li>
						<li><span>Xuất xứ:</span> <strong class="label label-danger"><?php echo get_post_meta($post->ID, 'xuat_xu', true); ?></li></strong>
						<li><span>Đơn vị NK:</span> <strong class="label label-danger"><?php echo get_post_meta($post->ID, 'don_vi_nhap_khau', true); ?></li></strong>
						<li><span>Bảo hành:</span> <strong class="label label-danger"><?php echo get_post_meta($post->ID, 'bao_hanh', true); ?></strong></li>
						<li><span>Khuyến mại:</span> <strong class="label label-danger"><?php echo get_post_meta($post->ID, 'khuyen_mai', true); ?></strong></li>
						<li><span>Bảo hành:</span> <strong class="label label-danger"><?php echo get_post_meta($post->ID, 'bao_hanh', true); ?></strong></li>
					</ul> <!-- Manufacturer Ends -->
					<hr>
					<div class="price">
						<span class="price-head">Giá:</span>
						<span class="price-new"><strong class="label label-danger"><?php echo get_post_meta($post->ID, 'gia_san_pham', true); ?> VNĐ</strong></span> 
						<!-- <span class="price-old">$249.50</span> -->
						<p class="price-tax"><strong class="label label-danger">(*): Giá trên chưa bao gồm thuế</strong></p>
						<button class="btn btn-cart" type="button">Mua ngay</button>
					</div> <!-- Price Ends -->
					<hr>
					<div class="options">
						<div class="form-group">
							<label class="control-label text-uppercase">Xe Hải Đăng cam kết:</label>
							<div class="radio">
								<p>* Bảo đảm hàng chính hãng, ghi rõ nguồn gốc xuất xứ.</p>
								<p>* Giao hàng miễn phí trong vòng 50KM.</p>
								<p>* Nếu quý khách có thắc mắc hoặc cần thêm thông tin tư vấn, liên hệ trực tiếp với chúng tôi qua số điện thoại <strong>0942.359986</strong>, hoặc <strong>0983.802486</strong></p>
							</div>
						</div>
					</div> <!-- Available Options Ends -->
				</div>
			</div> <!-- Right Ends -->
		</div> <!-- Product Info Ends -->	
		
		<div class="tabs-panel panel-smart">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#tab-specification">Thông số kỹ thuật</a></li>
				<li class=""><a href="#tab-ainfo">Thông tin chi tiết</a></li>
				<li class=""><a href="#tab-review">Đánh giá của khách hàng</a></li>
			</ul> <!-- Nav Tabs Ends -->
			
			<div class="tab-content clearfix">
				<div class="tab-pane active" id="tab-specification">
					<table class="table table-bordered">
						<thead>
						  <tr>
							<td colspan="2"><strong>Thông số kỹ thuật chi tiết</strong></td>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td>Kính thước:</td>
							<td><?php echo get_post_meta($post->ID, 'kich_thuoc', true); ?></td>
						  </tr>
						  <tr>
							<td>Hệ thống phanh:</td>
							<td><?php echo get_post_meta($post->ID, 'he_thong_phanh', true); ?></td>
						  </tr>
						  <tr>
							<td>Đường kính bánh xe:</td>
							<td><?php echo get_post_meta($post->ID, 'duong_kinh_banh_xe', true); ?></td>
						  </tr>
						  <tr>
							<td>Độ leo dốc:</td>
							<td><?php echo get_post_meta($post->ID, 'do_leo_doc', true); ?></td>
						  </tr>
						  <tr>
							<td>Cách thức thao tác:</td>
							<td><?php echo get_post_meta($post->ID, 'cach_thuc_thao_tac', true); ?></td>
						  </tr>
						  <tr>
							<td>Quãng đường đi được khi pin đầy:</td>
							<td><?php echo get_post_meta($post->ID, 'quang_duong_di_duoc_khi_pin_day', true); ?></td>
						  </tr>
						  <tr>
							<td>Vận tốc tối đa:</td>
							<td><?php echo get_post_meta($post->ID, 'van_toc_toi_da', true); ?></td>
						  </tr>
						  <tr>
							<td>Ắc quy:</td>
							<td><?php echo get_post_meta($post->ID, 'ac_quy', true); ?></td>
						  </tr>
						  <tr>
							<td>Sạc điện:</td>
							<td><?php echo get_post_meta($post->ID, 'sac_dien', true); ?></td>
						  </tr>
						  <tr>
							<td>Thời gian sạc:</td>
							<td><?php echo get_post_meta($post->ID, 'thoi_gian_sac', true); ?></td>
						  </tr>
						  <tr>
							<td>Công suất động cơ:</td>
							<td><?php echo get_post_meta($post->ID, 'cong_suat_dong_co', true); ?></td>
						  </tr>
						  <tr>
							<td>Điện áp:</td>
							<td><?php echo get_post_meta($post->ID, 'dien_ap', true); ?></td>
						  </tr>
						  <tr>
							<td>Trọng lượng xe:</td>
							<td><?php echo get_post_meta($post->ID, 'trong_luong_xe', true); ?></td>
						  </tr>
						  <tr>
							<td>Khả năng chở vật nặng:</td>
							<td><?php echo get_post_meta($post->ID, 'kha_nang_cho_vat_nang', true); ?></td>
						  </tr>
						</tbody>
					</table>
				</div> <!-- Specification Ends -->
				
				<div class="tab-pane" id="tab-ainfo">
					<p>
						<?php the_content(' '); ?>
					</p>
				</div> <!-- Additional Information Ends -->
				
				<div class="tab-pane" id="tab-review">
					<?php comments_template(); ?>
				</div> <!-- Review Ends -->
			</div> <!-- Tab Content Ends -->
		</div> <!-- Tabs Ends -->
		
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
				<div id="related" class="col-md-3 col-sm-6">
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
								<div class="description"><?php the_excerpt(); ?></div>
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
		<?php endwhile; else: ?>
		<p><?php _e('Xin lỗi! không có nội dung liên quan nào được tìm thấy!'); ?></p>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>
