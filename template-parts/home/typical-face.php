<?php
$groups = rwmb_meta('post-group', ['object_type' => 'setting'], 'setting-page');
if (empty($groups)) {
	return;
}
foreach ($groups as $key1 => $group) {
	$posts  = isset($groups[0]['select-post1']) ? $groups[0]['select-post1'] : '';
	$posts1 = isset($groups[1]['select-post1']) ? $groups[1]['select-post1'] : '';
	$posts2 = isset($groups[2]['select-post1']) ? $groups[2]['select-post1'] : '';
}
?>
<section class="Typical-face-home">
	<div class="container">
		<h2 class="title-primary center">Thành tựu và gương mặt nổi bật</h2>
		<div class="nav-Typical-face">
			<div class="row">

				<?php
				if (empty($posts)) {
					return;
				}
				?>
				<div class="col-md-4 col-sm-4 col-6">
					<div class="item">
						<?php
						foreach ($posts as $key => $post) :
							$number = $key + 1;
						?>
							<div class="<?= 'item-' . $number ?> item-11">
								<?= get_the_post_thumbnail() ?>
								<div class="text">
									<h3 class="title-1">
										<a href="<?= the_permalink() ?>"><?= get_the_title() ?></a>
									</h3>
								</div>
							</div>
						<?php
						endforeach;
						wp_reset_postdata();
						?>
					</div>
				</div>

				<?php
				if (empty($posts1)) {
					return;
				}
				?>
				<div class="col-md-4 col-sm-4 col-6">
					<div class="item item2">
						<?php
						foreach ($posts1 as $key => $post) :
							$number = $key + 1;
						?>
							<div class="<?= 'item-' . $number ?> item-11">
								<?= get_the_post_thumbnail() ?>
								<div class="text">
									<h3 class="title-1">
										<a href="<?= the_permalink() ?>"><?= get_the_title() ?></a>
									</h3>
								</div>
							</div>
						<?php
						endforeach;
						wp_reset_postdata();
						?>
					</div>
				</div>

				<?php
				if (empty($posts2)) {
					return;
				}
				?>
				<div class="col-md-4 col-sm-4 col-xs-12 col-6-10">
					<div class="item">
						<?php
						foreach ($posts2 as $key => $post) :
							$number = $key + 1;
						?>
							<div class="<?= 'item-' . $number ?> item-11">
								<?= get_the_post_thumbnail() ?>
								<div class="text">
									<h3 class="title-1">
										<a href="<?= the_permalink() ?>"><?= get_the_title() ?></a>
									</h3>
								</div>
							</div>
						<?php
						endforeach;
						wp_reset_postdata();
						?>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>