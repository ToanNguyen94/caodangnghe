<?php

use Titanweb\cdn\TemplateFunction;

get_header(); ?>

<?php
?>
<section class="search">
	<div class="ttm-page-title-row search__banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-box ttm-textcolor-white">
						<div class="breadcrumb-wrapper">
							<?= do_shortcode('[wpseo_breadcrumb]') ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</div>
	<div class="container">
		<div class="search__title">
			<h1 class="title">
				<?php
				printf(esc_html__('Search Results for: %s', 'xadventures'), '<span>' . get_search_query() . '</span>');
				?>
			</h1>
		</div>
	</div>
</section>


<?php
if (have_posts()) :
?>

	<div class="main-new">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-9 col-xs-12">
					<div class="content-new">
						<?php if (have_posts()) : ?>
							<div class="post-list">
								<?php
								/* Start the Loop */
								while (have_posts()) :
									the_post();
									get_template_part('template-parts/content');
								endwhile;
								?>
							</div>
						<?php
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
					</div>
				</div>
				<?php get_template_part('template-parts/side-bar'); ?>
			</div>
		</div>
	</div>

<?php else : ?>
	<?php get_template_part('template-parts/none'); ?>
<?php endif; ?>

<?php get_footer(); ?>