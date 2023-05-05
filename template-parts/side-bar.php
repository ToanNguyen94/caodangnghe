<?php

use Titanweb\cdn\TemplateFunction;

$list_categories = rwmb_meta('list-sidebar', ['object_type' => 'setting'], 'setting-page');
$categories = rwmb_meta('select-category', ['object_type' => 'setting'], 'setting-page');
foreach ($categories as $category) {
	$name_top = $categories[0]->name;
	$name_bot = $categories[1]->name;
}
$args_top     = [
	'category_name'  => $name_top,
	'post_type'      => 'post',
	'posts_per_page' => 5,
];
$args_bot      = [
	'category_name'  => $name_bot,
	'post_type'      => 'post',
	'posts_per_page' => 5,
];
$the_query_top = new WP_Query($args_top);
$the_query_bot = new WP_Query($args_bot);

// $archive_id = get_queried_object_id();
// if ($archive_id != 4) {
// 	$archive_id = 0;
// }
// $terms      = get_terms([
// 	'taxonomy'   => 'category',
// 	'hide_empty' => 1,
// 	// 'child_of'   => 1,
// 	// 'childless ' => true,
// 	'parent'     => $archive_id,
// ]);
?>
<div class="col-md-3 col-sm-3 col-xs-12">
	<div class="sidebar-new">
		<aside class="widget widget-categories">
			<h3 class="widget-title">Danh mục</h3>
			<ul>
				<?php
				foreach ($list_categories as $list_category) :
				?>
					<li>
						<a href="<?= get_term_link($list_category) ?>"><?= $list_category->name ?></a>
						<span><?php TemplateFunction::get_image_path('arn.png') ?></span>
					</li>
				<?php endforeach; ?>
			</ul>
		</aside>

		<aside class="widget post-widget">
			<h3 class="widget-title"><?= $name_top ?></h3>
			<ul class="widget-post ttm-recent-post-list">
				<?php
				if ($the_query_top->have_posts()) :
					while ($the_query_top->have_posts()) :
						$the_query_top->the_post();
				?>
						<li>
							<a href="<?= the_permalink() ?>"> <?= get_the_post_thumbnail() ?> </a>
							<a href="<?= the_permalink() ?>" class="clearfix"><?= the_title() ?></a>
						</li>
				<?php
					endwhile;
				endif;
				wp_reset_postdata();
				?>
			</ul>
		</aside>

		<aside class="widget tuyensinhaside-widget">
			<h3 class="widget-title"><?= $name_bot ?></h3>
			<?php
			if ($the_query_bot->have_posts()) :
				while ($the_query_bot->have_posts()) :
					$the_query_bot->the_post();
			?>
					<div class="nav-widget">
						<div class="item">
							<div class="left">
								<span class="span1"><?= get_the_date('d-m') ?></span>
								<span class="span2"><?= get_the_date('Y') ?></span>
							</div>
							<div class="right">
								<h3 class="title"><a href="<?= the_permalink() ?>"><?= the_title() ?></a>
								</h3>
								<div class="clearfix"></div>
							</div>

						</div>
					</div>
			<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>
		</aside>

	</div>
</div>