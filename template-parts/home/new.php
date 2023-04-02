<?php
$args = [
	'category_name' => 'tin-tuc',
	'post_type'	=> 'post',
	'posts_per_page' => 4,
];
$the_query = new WP_Query($args);
?>
<section class="new-hot-home">
	<div class="container">
		<h2 class="title-primary center">Tin tức & Sự kiện</h2>
		<div class="nav-new-hot">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-xs-12">
					<div class="new-hot-left">
						<?php
						if ($the_query->have_posts()) :
							while ($the_query->have_posts()) : $the_query->the_post();
						?>
								<div class="item">
									<div class="image"><a href="<?= the_permalink() ?>"><?= the_post_thumbnail() ?></a></div>
									<div class="nav-image">
										<h3 class="title-1">
											<a href="<?= the_permalink() ?>"><?= get_the_title() ?></a>
										</h3>
										<p class="date"><?= get_the_date() ?></p>
										<div class="desc"><?= the_excerpt() ?></div>
									</div>
									<div class="clearfix"></div>
								</div>
						<?php
							endwhile;
						endif;
						wp_reset_postdata();
						?>

					</div>
				</div>

				<?php
				$ads_image = rwmb_meta('ads-images');
				$ads_link = rwmb_meta('ads-link');
				?>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="ads">

						<a href="<?= $ads_link ?>">
							<img src="<?= $ads_image['full_url'] ?>" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>