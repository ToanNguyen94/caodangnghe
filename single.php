<?php
get_header();
// global $post;
$terms = get_the_terms(get_the_ID(), 'category');
$category_slug = $terms[0]->slug;
$args = [
	'category_name' => $category_slug,
	'post_type'	=> 'post',
	'posts_per_page' => 10,
	'post__not_in'   => [get_the_ID()],
];
$the_query = new WP_Query($args);

?>
<div class="ttm-page-title-row">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-box ttm-textcolor-white">
					<div class="page-title-heading">
						<h1 class="title"><?= the_archive_title() ?></h1>
					</div>
					<div class="breadcrumb-wrapper">
						<?= do_shortcode('[rank_math_breadcrumb]') ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.container -->
</div>
<div class="main-new">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-sm-9 col-xs-12">
				<div class="content-new">
					<div class="">
						<!-- ttm-blog-classic-->
						<article class="post ttm-blog-classic" <?php post_class() ?> id="<?php the_ID() ?>">
							<div class="featured-imagebox featured-imagebox-post">
								<h1 style="margin: 12px;font-size: 26px;line-height: 1;text-transform: none;">
									<?= the_title() ?>
								</h1>
								<div class="featured-content featured-content-post" style="padding-top: 0px">
									<div class="post-meta">
										<span class="ttm-meta-line"><i class="fa fa-calendar"></i>
											<?= get_the_date('d-m-Y') ?>
										</span>
										<span class="ttm-meta-line"><i class="fa fa-eye"></i>
											<?= do_shortcode('[post-views]') ?>
										</span>
									</div>
									<div class="featured-desc">
										<?= the_content() ?>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>

							<div class="ttm-blog-classic-content single-blog">
								<div class="ttm-blog-classic-box-comment">
									<div id="comments" class="comments-area" style="margin: 0px">
										<h2 class="comments-title">Bài viết liên quan</h2>
										<ul style="padding: 0px;margin: 0px">
											<?php
											if ($the_query->have_posts()) :
												while ($the_query->have_posts()) : $the_query->the_post();
											?>
													<li style="margin-bottom: 8px;">
														<a href="<?= the_permalink() ?>">
															<?= the_title() ?>
															<!-- <i style="color: #7D7D8A;font-style: italic; font-size: 13px; margin-left: 10px;">
																(  get_the_date('d-m-Y') )
															</i> -->
														</a>
													</li>
											<?php
												endwhile;
											endif;
											?>
										</ul>
									</div>
								</div>
							</div>

						</article>

						<!-- ttm-blog-classic end -->

					</div>
				</div>
			</div>
			<?php get_template_part('template-parts/side-bar'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>