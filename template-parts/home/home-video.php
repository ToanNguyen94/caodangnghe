<?php
$ads_image = rwmb_meta( 'ads-images' );
var_dump( $ads_image );
$ads_link = rwmb_meta( 'ads-link' );

$image = rwmb_meta( 'video-image' );
// $image_url = wp_get_attachment_image_url( $image['ID'], 'full' );
$title = rwmb_meta( 'video-title', '', get_the_ID() );
$link  = rwmb_meta( 'video-link' );
?>
<div class="video-home-bg">
	<!-- <section class="video-home ttm-row ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img2 row-title-section clearfix" style="background-image: ;">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-1"></div>
				<div class="col-md-8 col-sm-10">
					<div class="text-center">
						<div class="ttm-video-btn">
							<a class="ttm-play-btn " href="https://www.youtube.com/embed/ynxrjQBiowA"
								data-fancybox="gallery">
								<span class="ttm-video-btn-play"><i class="fa fa-play"></i></span>
							</a>
						</div>
						<div class="row-title mt-25">
							<div class="section-title clearfix">
								<div class="title-header">
									<h2 class="title">VIDEO TRƯỜNG CAO ĐẲNG NGHỀ CÔNG NGHIỆP HÀ NỘI</h2>
									<div class="read-more">
										<a href="https://www.youtube.com/channel/UCnzWhlIZRPa9PZJFdEqpbvg"
											target="_blank">Xem thêm</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</section> -->
</div>
