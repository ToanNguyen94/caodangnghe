<?php

use Titanweb\cdn\TemplateFunction;

$groups   = rwmb_meta('banner_group');
?>

<div class="slider-main owl-carousel">
	<?php
	foreach ($groups as $group) :
		$image = isset($group['banner_img']) ? $group['banner_img'] : '';
		$title = isset($group['banner_title']) ? $group['banner_title'] : '';

	?>
		<div class="item">
			<a href="">
				<?php
				TemplateFunction::get_image_id($image);
				?>
			</a>
			<h2 class="title-primary banner-title center"><?= $title; ?></h2>
		</div>
	<?php
	endforeach;
	?>
</div>