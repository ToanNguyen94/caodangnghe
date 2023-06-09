<?php
$video_groups = rwmb_meta('video-groups');
$link_video1  = rwmb_meta('viedo-link');
?>
<div class="home-video">
	<h2 class="title-primary center">Video về nhà trường</h2>
	<div class="video-home-bg owl-carousel">
		<?php
		foreach ($video_groups as $group) :
			$bg_url = isset($group['anh_background']) ? wp_get_attachment_image_url($group['anh_background'], 'full') : '';
			$title = isset($group['video-title']) ? $group['video-title'] : '';
			$link_url = isset($group['video-link']) ? $group['video-link'] : '';
		?>
			<section class="video-home ttm-row ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img2 row-title-section clearfix" style="background: url('<?= esc_url($bg_url) ?>') ;">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-sm-1"></div>
						<div class="col-md-8 col-sm-10">
							<div class="text-center">
								<div class="ttm-video-btn">
									<a class="ttm-play-btn popup-video" href="<?= $link_url ?>" data-fancybox="gallery">
										<span class="ttm-video-btn-play"><i class="fa fa-play"></i></span>
									</a>
								</div>
								<div class="row-title mt-25">
									<div class="section-title clearfix">
										<div class="title-header">
											<h2 class="title"><?= $title ?></h2>
											<div class="read-more">
												<a href="<?= $link_video1 ?>" target="_blank">Xem thêm</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</section>
		<?php endforeach; ?>
	</div>
</div>