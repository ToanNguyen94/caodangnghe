<?php get_header(); ?>
<?php
if (have_posts()) :
	get_template_part('template-parts/archive-header');
?>
	<div class="site-main">

		<!--blog-section-->
		<section class="ttm-row blog-grid-section clearfix programs">
			<div class="container">
				<!-- row -->
				<div class="row">
					<?php if (have_posts()) :
						/* Start the Loop */
						while (have_posts()) :
							the_post();
					?>
							<div class="col-md-6 col-lg-4">
								<!-- featured-imagebox-post -->
								<div class="featured-imagebox featured-imagebox-post box-shadow">
									<div class="featured-thumbnail">
										<a href="<?= the_permalink() ?>">
											<?= the_post_thumbnail() ?>
										</a>
									</div>
									<div class="featured-content featured-content-post">
										<div class="post-title featured-title">
											<h5><a href="<?= the_permalink() ?>"><?= the_title() ?></a>
											</h5>
										</div>
										<div class="post-meta">
											<span class="ttm-meta-line"><i class="fa fa-calendar"></i>
												<?= get_the_date('d-m-Y') ?>
											</span>
											<span class="ttm-meta-line view"><i class="fa fa-eye"></i>
												<?= do_shortcode('[post-views]') ?>
											</span>
										</div>
										<div class="training-description">
											<?= the_excerpt() ?>
										</div>

									</div>
								</div><!-- featured-imagebox-post end -->
							</div>
					<?php
						endwhile;
						the_posts_pagination(
							array(
								'prev_text' => '<',
								'next_text' => '>',
							)
						);
					else :
						get_template_part('template-parts/content', 'none');
					endif;
					?>

				</div><!-- row end-->
			</div>
		</section>
		<!--blog-section end-->

	</div>
<?php else :
	get_template_part('template-parts/content/none');
endif; ?>
<?php get_footer(); ?>