<?php
$args = [
	'category_name' => 'tin-tuc',
	'post_type'	=> 'post',
	'posts_per_page' => 10,
];
$the_query = new WP_Query($args);
?>
<section class="event-home-page">
	<div class="container">
		<h2 class="title-primary center">SỰ KIỆN SẮP TỚI</h2>
		<div class="slider-event owl-carousel">
			<?php
			if ($the_query->have_posts()) :
				while ($the_query->have_posts()) : $the_query->the_post();
			?>
					<div class="owl-item">
						<div class="item">
							<div class="image">
								<a href="<?= the_permalink() ?>">
									<?= get_the_post_thumbnail() ?>
								</a>
							</div>
							<div class="nav-image">
								<div class="title-date">
									<h3 class="title">
										<a href="<?= the_permalink() ?>"><?= get_the_title() ?></a>
									</h3>
									<div class="date">
										<span class="m"><?= get_the_date('M') ?></span>
										<span class="d"><?= get_the_date('d') ?></span>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
			<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</section>