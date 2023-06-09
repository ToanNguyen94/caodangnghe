<?php
$image = rwmb_meta('form-image', ['object_type' => 'setting'], 'setting-page');
$image_url = isset($image['ID']) ? wp_get_attachment_image_url($image['ID'], 'full')  : '';
$title1 = rwmb_meta('form-title1', ['object_type' => 'setting'], 'setting-page');
$title2 = rwmb_meta('form-title2', ['object_type' => 'setting'], 'setting-page');
?>
<section class="register-bottom" style="background-image: url('<?= esc_url($image_url) ?>');">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-12">
				<div class="register-bottom-left">
					<h3 class="title-2"><?= wpautop($title1) ?></h3>
					<h2 class="title-1"><?= $title2 ?></h2>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-12">
				<div class="register-bottom-right">
					<?= do_shortcode('[fluentform id="1"]') ?>
				</div>
			</div>
		</div>
	</div>
</section>