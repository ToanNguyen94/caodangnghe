<?php

use Titanweb\cdn\TemplateFunction;

$terms = rwmb_meta( 'ngang_nghe', array( 'object_type' => 'setting' ), 'setting-page' );
// foreach ($terms as $key => $term) {
// $category_name = $term->name;
// $category_id = $term->term_id;
// }
// $args = [
// 'category_name' => '$category_name',
// 'post_type' => 'post',
// 'posts_per_page' => 3,
// ];
// $the_query = new WP_Query($args);
?>
<section class="education-program-home">
	<div class="container">
		<h2 class="title-primary center">Ngành nghề đào tạo</h2>
		<div class="nav-education-program">
			<div class="row">
				<?php
				foreach ( $terms as $key => $term ) :
					$category_name = $term->name;
					$category_slug = $term->slug;
					$category_id   = $term->term_id;
					?>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="item">
							<div class="image">
								<a href="#">
									<?php $idimage = rwmb_meta( 'category_image', array( 'object_type' => 'term' ), $category_id ); ?>
									<img src="<?= esc_url( wp_get_attachment_image_url( $idimage['ID'] ), 'full' ) ?>" alt="">
								</a>
							</div>
							<h3 class="title"><a href="#">Lĩnh vực: <?= $category_name ?></a></h3>
							<ul class="list-content more">
								<?php
								$args      = array(
									'category_name'  => $category_slug,
									'post_type'      => 'post',
									'posts_per_page' => 3,
								);
								$the_query = new WP_Query( $args );
								if ( $the_query->have_posts() ) :
									while ( $the_query->have_posts() ) :
										$the_query->the_post();
										?>
										<li>
											<?php TemplateFunction::get_image_path( 'icon5.png' ) ?>
											<a href="<?= the_permalink() ?>"><?= the_title() ?></a>
										</li>
										<?php
									endwhile;
								endif;
								?>

							</ul>
							<div class="btn-container">
								<button id="toggle1">Xem thêm</button>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>