<!DOCTYPE html>
<html <?php

		use Titanweb\cdn\TemplateFunction;

		language_attributes() ?>>

<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0" nonce="QG7MupkD"></script>

	<?php wp_head() ?>
</head>

<?php
$phone = rwmb_meta('header-phone', ['object_type' => 'setting'], 'setting-page');
$link_phone = rwmb_meta('link_phone', ['object_type' => 'setting'], 'setting-page');
?>

<body <?php body_class() ?>>
	<?php wp_body_open(); ?>

	<div class="page-body-buong" id="page">
		<!--header start-->
		<header id="top">
			<div class="overlay-wrap"></div>
			<nav class="navbar navbar-scroll">
				<div class="top-nav d-none d-lg-block">
					<div class="container">
						<div class="row">
							<div class="col-logo" style="flex: 0 0 6%;max-width: 7%;">
								<div class="huanchuong">
									<?php TemplateFunction::get_image_path('huan-chuong.jpg') ?>
								</div>
							</div>
							<div class="col-logo">
								<div class="logo">
									<?= the_custom_logo() ?>
								</div>
							</div>
							<div class="col-text">
								<h1>
									Trường trung cấp kinh tế - kỹ thuật <br>
									<span>bắc thăng long</span>
								</h1>
								<p>đồng hành cùng thành công của bạn</p>
							</div>
							<div class="col-hotline">
								<a href="tel:<?= $link_phone ?>">
									<div class="hotline">
										<div class="img">
											<?php TemplateFunction::get_image_path('phone.png') ?>
										</div>
										<p>
											<span>Hotline</span><br><?= $phone ?>
										</p>
									</div>
								</a>
								<form role="search" method="get" id="searchform" class="searchForm" action="<?= home_url('/') ?>">
									<input type="text" value="<?php get_search_query() ?>" name="s" id="s" placeholder="Nhập từ khóa tìm kiếm" />
									<input type="submit" value=""></input>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div id="main-nav">
					<div class="container">
						<div class="navbar-icon">
							<div class="navbar-icon-inner"></div>
						</div>
						<div class="logo">
							<?= the_custom_logo() ?>
						</div>
						<div class="mobile-search">
							<div class="btn-search">
								<i class="fa fa-search" aria-hidden="true"></i>
							</div>
							<form role="search" method="get" id="searchform" class="searchForm" action="<?= home_url('/') ?>">
								<input type="text" value="<?php get_search_query() ?>" name="s" id="s" placeholder="Nhập từ khóa tìm kiếm" />
								<input type="submit" value=""></input>
							</form>
						</div>

						<div id="site-header-menu">
							<div id="site-navigation" class="site-navigation">
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
						</div>
					</div>
				</div>
			</nav>
		</header>
		<!--header end-->

		<main class="main" role="main">