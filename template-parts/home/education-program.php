<?php

use Titanweb\cdn\TemplateFunction;

$terms2 = get_terms(
	[
		'taxonomy' => 'nganh',
		'hide_empty' => false,
	]
);
?>
<section class="education-program-home">
	<div class="container">
		<h2 class="title-primary center">Ngành nghề đào tạo</h2>
		<div class="nav-education-program">
			<div class="row">
				<?php
				foreach ($terms2 as $key => $term) :
					$category_name = $term->name;
					$category_id   = $term->term_id;
					$category_taxonomy = $term->taxonomy;
					$category_slug = $term->slug;
				?>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="item">
							<div class="image">
								<a href="<?= get_term_link($category_id, $category_taxonomy) ?>">
									<?php $idimage = rwmb_meta('category_image', array('object_type' => 'term'), $category_id); ?>
									<img src="<?= esc_url(wp_get_attachment_image_url($idimage['ID']), 'full') ?>" alt="">
								</a>
							</div>
							<h3 class="title"><a href="<?= get_term_link($category_id, $category_taxonomy) ?>">Lĩnh vực: <?= $category_name ?></a></h3>
							<ul class="list-content more">
								<?php
								$args      = [
									'post_type'      => 'programs',
									'posts_per_page' => 3,
									'tax_query'      => [
										'relation' => 'AND',
										[
											'taxonomy' => 'nganh',
											'field'    => 'id',
											'terms'    => $category_id,
										],
									],
								];
								$the_query = new WP_Query($args);
								if ($the_query->have_posts()) :
									while ($the_query->have_posts()) :
										$the_query->the_post();
								?>
										<li>
											<?php TemplateFunction::get_image_path('icon5.png') ?>
											<a href="<?= the_permalink() ?>"><?= the_title() ?></a>
										</li>
								<?php
									endwhile;
								endif;
								?>

								<!-- Text-hidden  -->
								<div id="text<?= $key + 1 ?>" class="text-hinden">
									<?php
									$args2      = [
										'post_type'      => 'programs',
										'posts_per_page' => 15,
										'offset' => 3,
										'tax_query'      => [
											'relation' => 'AND',
											[
												'taxonomy' => 'nganh',
												'field'    => 'id',
												'terms'    => $category_id,
											],
										],
									];
									$the_query = new WP_Query($args2);
									if ($the_query->have_posts()) :
										while ($the_query->have_posts()) :
											$the_query->the_post();
									?>
											<li>
												<?php TemplateFunction::get_image_path('icon5.png') ?>
												<a href="<?= the_permalink() ?>"><?= the_title() ?></a>
											</li>
									<?php
										endwhile;
									endif;
									?>
								</div>

							</ul>
							<div class="btn-container">
								<button id="toggle<?= $key + 1 ?>">Xem thêm</button>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>