<?php
$content_groups = rwmb_meta('content-groups');
$ads_images = rwmb_meta('ads-img');
$ads_link = rwmb_meta('ads-link');

$args = [
	'category_name' => 'tuyen-sinh',
	'post_type'	=> 'post',
	'posts_per_page' => 5,
];
$the_query = new WP_Query($args);
?>
<section class="main main-Admissions">
	<div class="ttm-page-title-row">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-box ttm-textcolor-white">
						<div class="page-title-heading">
							<h1 class="title"><?= the_title() ?></h1>
						</div>
						<div class="breadcrumb-wrapper">
							<?= do_shortcode('[wpseo_breadcrumb]') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>

	<!-- Content  -->
	<div class="content-Admissions">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-12">
					<div class="content-Admissions-left">
						<div class="acc">
							<?php
							foreach ($content_groups as $content_group) :
								$title = isset($content_group['ts-title']) ? $content_group['ts-title'] : '';
								$content = isset($content_group['ts-content']) ? $content_group['ts-content'] : '';
							?>
								<div class="acc__card">
									<details>
										<summary class="acc__title"><?= $title ?></summary>
										<div class="acc__panel1"><?= wpautop($content) ?></div>
									</details>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>

				<!-- Side bar  -->
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="Admissions-sider">
						<?php
						if ($the_query->have_posts()) :
							while ($the_query->have_posts()) : $the_query->the_post();
						?>
								<div class="item">
									<a href="<?= the_permalink() ?>">
										<span><?= the_title() ?></span>
										<?= the_post_thumbnail() ?>
									</a>
								</div>
						<?php
							endwhile;
						endif;
						wp_reset_postdata()
						?>

						<div class="ads">
							<a href="<?= $ads_link ?>"><img src="<?= $ads_images['full_url'] ?>" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>