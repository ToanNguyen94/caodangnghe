<?php

$images = rwmb_meta('partner-images');
?>
<section class="partner-home">
	<div class="container">
		<div class="center">
			<h2 class="title-primary ">Hợp tác quốc tế</h2>
		</div>

		<div class="slider-partner owl-carousel">
			<?php
			foreach ($images as $image) :
				$image_url = isset($image['ID']) ? wp_get_attachment_image_url($image['ID'], 'full') : '';
			?>
				<div class="item">
					<a href="#"><img src="<?= esc_url($image_url) ?>" alt=""></a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>