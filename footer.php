</main>

<?php

use Titanweb\cdn\TemplateFunction;

?>
<footer class="footer widget-footer clearfix">


	<!--    -->
	<div class="second-footer ttm-textcolor-white" style="position: relative;">
		<div id="clickTuyensinh">
			<a href="<?= home_url() . '/tuyen-sinh' ?>">
				<?php TemplateFunction::get_image_path('group-11.png') ?>
			</a>
		</div>
		<div class="container">

			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 widget-area">
					<div class="widget widget_text  clearfix">
						<h3 class="widget-title">Về chúng tôi</h3>

						<div class="textwidget widget-text">
							TRƯỜNG CAO ĐẲNG NGHỀ CÔNG NGHIỆP HÀ NỘI<br>
							131 Thái Thịnh, Đống Đa, TP. Hà Nội<br>
							Tel: 0246.2757361 - 0243. 8533780 - 0246. 2753410<br>
							Email: info@hnivc.edu.vn<br><br>
							<br>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 widget-area">
					<div class="widget widget_nav_menu clearfix center">
						<div class="logo-footer">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3046408183027!2d105.76176151415729!3d21.020493193438135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454a15b9aeb8d%3A0x84ec0f4d29a7ab36!2zU8OibiB24bqtbiDEkeG7mW5nIFF14buRYyBnaWEgTeG7uSDEkMOsbmg!5e0!3m2!1svi!2s!4v1680530886736!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

						</div>
						<!-- <h2 class="title-footer">TRƯỜNG CAO ĐẲNG NGHỀ CÔNG NGHIỆP HÀ NỘI</h2> -->
						<div class="social-icons circle social-hover">
							<ul class="list-inline">
								<li class="social-facebook"><a class="tooltip-top" target="_blank" href="https://www.facebook.com/hnivc131/" data-tooltip="Facebook">
										<i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
									</a>
								</li>
								<li class="social-flickr"><a class=" tooltip-top" target="_blank" href="https://www.youtube.com/channel/UCnzWhlIZRPa9PZJFdEqpbvg" data-tooltip="Youtube">
										<i class="fa-brands fa-youtube" aria-hidden="true"></i>
									</a>
								</li>
								<li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="https://hnivc.edu.vn/Linkedin" data-tooltip="instagram">
										<i class="fa-brands fa-linkedin" aria-hidden="true"></i>
									</a>
								</li>
								<li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="https://www.tiktok.com/@hnivc131" data-tooltip="Tiktok">
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
						<div class="fb-page" data-href="https://www.facebook.com/hnivc131/" data-tabs="timeline" data-width="" data-height="130" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
							<blockquote cite="https://www.facebook.com/hnivc131/" class="fb-xfbml-parse-ignore">
								<a href="https://www.facebook.com/hnivc131/">Trường Cao Đẳng Nghề Công Nghiệp Hà Nội</a>
							</blockquote>
						</div>
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
	<div class="tada"><a href="tel:0243. 8533780">0243. 8533780</a>
	</div>
</div>
<div class="zm">
	<div class="tada">
		<a href="http://dangkyonline.hnivc.edu.vn/" target="_blank">
			<?php TemplateFunction::get_image_path('dkhoc.png') ?>
		</a>
	</div>
</div>
<?php wp_footer(); ?>
</body>

</html>