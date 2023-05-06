<?php

$images   = rwmb_meta('banner_image');
$text = rwmb_meta('banner-text');
if (!$images) {
	return;
}
?>

<div class="slider-main owl-carousel">
	<?php
	foreach ($images as $image) :
	?>
		<div class="item">
			<a href="">
				<img src="<?= esc_url(wp_get_attachment_image_url($image['ID'], 'full')) ?>" alt="">
			</a>
		</div>
	<?php
	endforeach;
	?>
</div>
<div class="wrapper title-primary banner-title center">
	<p class="target"><?= $text; ?></p>
</div>