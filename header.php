<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="Generator" content= "Xe Hải Đăng">
	<meta name="robots" content="index, follow">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="cau28x">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
	<title>
	<?php
	// Print the <title> tag based on what is being viewed.
	global $page, $paged;
	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'version2' ), max( $paged, $page ) );
	?>
	</title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="author" href="https://plus.google.com/u/0/+XeH%E1%BA%A3i%C4%90%C4%83ngdotcom/?rel=author">
	<!-- Bootstrap Core CSS -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- CSS Files -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<link href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" rel="stylesheet">
	
	<!--[if lt IE 9]>
		<script src="js/ie8-responsive-file-warning.js"></script>
	<![endif]-->
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
	<header id="header-area">
		<div class="header-top">
			<div class="container">
					<div class="col-sm-8 col-xs-12">
						<div class="header-links">
							<ul class="nav navbar-nav pull-left">
								<li>
									<a href="mailto:info@xehaidang.com" title="Email Xe Hải Đăng">
										<i class="fa fa-envelope" title="Email Xe Hải Đăng" data-original-title="Email Xe Hải Đăng" ></i>
										<span class="hidden-sm hidden-xs">info@xehaidang.com</span>
									</a>
								</li>
								<li>
									<a href="#" title="#">
										<i class="fa fa-phone" title="Hotline Xe Hải Đăng" data-original-title="Hotline Xe Hải Đăng"></i>
										<span class="hidden-sm hidden-xs" title="Hotline Xe Hải Đăng">0942.359986</span>
									</a>
								</li>
							</ul>
						</div>
					</div> <!-- Hotline -->
					
					<div class="col-sm-4 col-xs-12">
						<div class="pull-right">
							<ul class="list-inline sm-links">
								<li><a href="http://facebook.com/XeHaiDang" target="_blank" rel="nofollow" title="facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="http://twitter.com/XeHaiDang" target="_blank" rel="nofollow" title="twitter"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://plus.google.com/u/0/+XeH%E1%BA%A3i%C4%90%C4%83ngdotcom" target="_blank" rel="nofollow" title="google"><i class="fa fa-google"></i></a></li>
								<li><a href="http://instagram.com/haidangbike" target="_blank" rel="nofollow" title="instagram"><i class="fa fa-instagram"></i></a></li>
								<li><a href="http://pinterest.com/haidangbike" target="_blank" rel="nofollow" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="http://linkedin.com/haidangbike" target="_blank" rel="nofollow" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div> <!-- Mạng Xã hội -->
			</div>
		</div> <!-- End .Header Top -->
		
		<div class="container">
			<div class="main-header">
				<div class="row">
					<div class="col-md-6">
						<div id="logo">
							<a href="<?php bloginfo('home') ?>" title="Logo">
								<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" width="250" title="Logo Xe Hải Đăng" alt="Logo Xe Hải Đăng" class="img-responsive">
							</a>
						</div>
					</div> <!-- End #logo -->
					<?php get_search_form(); ?>
				</div>
			</div> <!-- End Main Header -->
			
			<nav id="main-menu" class="navbar" role="navigation">
				<div class="navbar-header">
					<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-cat-collapse">
						<span class="sr-only">Menu</span>
						<i class="fa fa-bars"></i>
					</button>
				</div> <!-- End Menu Mobile -->
				
				<div class="collapse navbar-collapse navbar-cat-collapse">
					<?php
						$args = array(
							'theme_location' => 'header',
							'menu' => '',
							'container' => 'div',
							'container_class' => 'menu-{menu-slug}-container',
							'container_id' => '',
							'menu_class' => 'nav navbar-nav',
							'menu_id' => '',
							'echo' => true,
							'fallback_cb' => '',
							'before' => '',
							'after' => '',
							'link_before' => '',
							'link_after' => '',
							'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
							'depth' => 0,
							'walker' => ''
						);
						wp_nav_menu( $args );
					?>
				</div> <!-- End Nav Menu -->
			</nav>
		</div>
	</header>
