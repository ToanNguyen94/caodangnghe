<?php

$image = rwmb_meta('video-bg');
$image_url = wp_get_attachment_image_url($image['ID'], 'full');
$title = rwmb_meta('video-title', '', get_the_ID());
$link_url = rwmb_meta('video-url');
$link_video  = rwmb_meta('viedo-link');
?>
<div class="video-home-bg">
	<section class="video-home ttm-row ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img2 row-title-section clearfix" style="background: url('<?= esc_url($image_url) ?>') ;">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-1"></div>
				<div class="col-md-8 col-sm-10">
					<div class="text-center">
						<div class="ttm-video-btn">
							<a class="ttm-play-btn " href="<?= $link_url ?>" data-fancybox="gallery">
								<span class="ttm-video-btn-play"><i class="fa fa-play"></i></span>
							</a>
						</div>
						<div class="row-title mt-25">
							<div class="section-title clearfix">
								<div class="title-header">
									<h2 class="title"><?= $title ?></h2>
									<div class="read-more">
										<a href="<?= $link_video ?>" target="_blank">Xem thêm</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section>
</div>