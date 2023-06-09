<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0" nonce="QG7MupkD"></script>

	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
	<?php wp_body_open(); ?>

	<!--header start-->
	<header id="masthead" class="header ttm-header-style-classic">
		<!-- ttm-header-wrap -->
		<div class="ttm-header-wrap">
			<!-- ttm-stickable-header-w -->
			<div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
				<!-- ttm-topbar-wrapper -->
				<div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix ttm-topbar-wrapper-mobile">
					<div class="container">
						<div class="ttm-topbar-content">
							<div class="topbar-right text-right">
								<ul class="top-contact">
									<li><i class="fa fa-envelope-o"></i><a href="mailto:info@hnivc.edu.vn">info@hnivc.edu.vn</a></li>
									<li><a href="https://hnivc.edu.vn/">Đăng nhập</a></li>
								</ul>
								<ul class="login-top">
									<li><i class="fa fa-phone"></i> 0243. 8533780</li>
								</ul>
								<div class="ttm-social-links-wrapper list-inline">
									<ul class="social-icons">
										<li><a href="https://www.facebook.com/hnivc131/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
										</li>
										<li><a href="https://www.tiktok.com/@tiktokhnivc" target="_blank"><i class="fa-brands fa-twitter"></i></a>
										</li>
										<li><a href="https://www.youtube.com/channel/UCnzWhlIZRPa9PZJFdEqpbvg" target="_blank"><i class="fa-brands fa-youtube"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- ttm-topbar-wrapper end -->
				<div id="site-header-menu" class="site-header-menu">
					<div class="site-header-menu-inner ttm-stickable-header fixed-header visible-title">
						<div class="container">
							<div class="row">
								<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
									<!-- site-branding -->
									<div class="site-branding">
										<?= the_custom_logo() ?>
									</div>
									<!-- site-branding end -->
								</div>
								<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 medium-responsive">
									<!-- ttm-topbar-wrapper -->
									<div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
										<div class="ttm-topbar-content">

											<div class="topbar-right text-right">
												<ul class="top-contact">
													<li>
														<i class="fa fa-envelope"></i><a href="mailto:info@hnivc.edu.vn">info@hnivc.edu.vn</a>
													</li>
													<li>
														<i class="fa fa-phone"></i>0243. 8533780
													</li>
												</ul>
												<div id="site-navigation" class="site-navigation">
													<nav class="menu menu-header" style="float: left">
														<ul class="dropdown">
															<li class="menu-item has-submenu"><a href="#">Thư Viện</a>
																<ul class="sub-menu">
																	<li>
																		<a href="#">Giáo Trình Nội Bộ </a>
																	</li>
																</ul>
															</li>
															<li class="menu-item"><a href="<?= get_home_url() . '/lien-he' ?>">Liên hệ</a>
															</li>
															<li class="menu-item"><a href="#">Tra cứu</a>
															</li>
														</ul>
													</nav>
												</div>
											</div>
											<div class="ttm-social-links-wrapper list-inline">
												<ul class="social-icons">
													<li><a href="https://www.facebook.com/hnivc131/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
													</li>
													<li><a href="https://www.tiktok.com/@tiktokhnivc" target="_blank"><i class="fa-brands fa-twitter"></i></a>
													</li>
													<li><a href="https://www.youtube.com/channel/UCnzWhlIZRPa9PZJFdEqpbvg" target="_blank"><i class="fa-brands fa-youtube"></i></a>
													</li>

												</ul>
											</div>
										</div>

									</div>
									<!-- ttm-topbar-wrapper end -->
									<!--site-navigation -->
									<div id="site-navigation" class="site-navigation">

										<div class="ttm-menu-toggle">
											<input type="checkbox" id="menu-toggle-form">
											<label for="menu-toggle-form" class="ttm-menu-toggle-block">
												<span class="toggle-block toggle-blocks-1"></span>
												<span class="toggle-block toggle-blocks-2"></span>
												<span class="toggle-block toggle-blocks-3"></span>
											</label>
										</div>

										<nav id="menu" class="menu">
											<?php
											wp_nav_menu(array(
												'theme_location' => 'primary',
												'menu_id' => 'primary',
												'container' => '',
												'container_class' => '',
												'container_id' => '',
												'menu_class' => 'dropdown',
											))
											?>
										</nav>

									</div>
									<!-- site-navigation end-->
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
			<!-- ttm-stickable-header-w end-->
		</div>

		<!--ttm-header-wrap end -->
	</header>
	<!--header end-->

	<main class="main" role="main">