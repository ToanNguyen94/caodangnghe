<?php
$images   = rwmb_meta('banner_image');
if (!$images) {
	return;
}

?>

<section class="home-banner">
	<div class="home-banner__inner">
		<?php
		foreach ($images as $image) :
		?>
			<img src="<?= esc_url(wp_get_attachment_image_url($image['ID'], 'full')) ?>" alt="">
		<?php
		endforeach;
		?>
	</div>
</section>