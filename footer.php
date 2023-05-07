</main>
</div>

<?php

use Titanweb\cdn\TemplateFunction;

$about = rwmb_meta('footer-about', ['object_type' => 'setting'], 'setting-page');
$map = rwmb_meta('footer-map', ['object_type' => 'setting'], 'setting-page');
$face = rwmb_meta('code_facebook', ['object_type' => 'setting'], 'setting-page');
$link_fb = rwmb_meta('link-fb', ['object_type' => 'setting'], 'setting-page');
$link_you = rwmb_meta('link-you', ['object_type' => 'setting'], 'setting-page');
$link_in = rwmb_meta('link-in', ['object_type' => 'setting'], 'setting-page');
$link_tiktok = rwmb_meta('link-tiktok', ['object_type' => 'setting'], 'setting-page');
$link_hotline = rwmb_meta('link_hotline', ['object_type' => 'setting'], 'setting-page');
$link_dki = rwmb_meta('link-dki', ['object_type' => 'setting'], 'setting-page');
$link_tuvan = rwmb_meta('link-tuvan', ['object_type' => 'setting'], 'setting-page');

?>
<footer class="footer widget-footer clearfix">
	<!--    -->
	<div class="second-footer ttm-textcolor-white" style="position: relative;">
		<div id="clickTuyensinh">
			<a href="<?= $link_tuvan ?>">
				<?php TemplateFunction::get_image_path('group-11.png') ?>
			</a>
		</div>
		<div class="container">

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 widget-area">
					<div class="widget widget_text  clearfix">
						<h3 class="widget-title">Về chúng tôi</h3>
						<div class="textwidget widget-text">
							<?= wpautop($about); ?>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 widget-area">
					<div class="widget widget_nav_menu clearfix center">
						<div class="logo-footer">
							<?= wpautop($map); ?>
						</div>
						<!-- <h2 class="title-footer">TRƯỜNG CAO ĐẲNG NGHỀ CÔNG NGHIỆP HÀ NỘI</h2> -->
						<div class="social-icons circle social-hover">
							<ul class="list-inline">
								<li class="social-facebook"><a class="tooltip-top" target="_blank" href="<?= $link_fb ?>" data-tooltip="Facebook">
										<i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
									</a>
								</li>
								<li class="social-flickr"><a class=" tooltip-top" target="_blank" href="<?= $link_you ?>" data-tooltip="Youtube">
										<i class="fa-brands fa-youtube" aria-hidden="true"></i>
									</a>
								</li>
								<li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="<?= $link_in ?>" data-tooltip="instagram">
										<i class="fa-brands fa-linkedin" aria-hidden="true"></i>
									</a>
								</li>
								<li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="<?= $link_tiktok ?>" data-tooltip="Tiktok">
										<i class="fa-brands fa-tiktok" aria-hidden="true"></i>
									</a>
								</li>
							</ul>
						</div>
						<div class="phone-footer">
							<p>HOTLINE 24/7</p>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 widget-area">
					<div class="widget flicker_widget clearfix">
						<h3 class="widget-title">Fanpage Facebook</h3>
						<?= wpautop($face) ?>
					</div>
				</div>

			</div>
		</div>
	</div>
</footer>

<!--back-to-top start-->
<a id="totop" href="https://hnivc.edu.vn/#top" style="display: none;">
	<i class="fa fa-angle-up"></i>
</a>
<!--back-to-top end-->
<div class="call-btn">
	<div class="zoomIn"></div>
	<div class="pulse"></div>
	<div class="tada"><a href="tel:<?= $link_hotline ?>"><?= $link_hotline ?></a>
	</div>
</div>
<div class="zm">
	<div class="tada">
		<a href="<?= $link_dki ?>" target="_blank">
			<?php TemplateFunction::get_image_path('dkhoc.png') ?>
		</a>
	</div>
</div>
<?php wp_footer(); ?>
</body>

</html>