<?php get_header(); ?>

<main id="primary" class="main site-main">
	<div class="ttm-page-title-row">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="title-box ttm-textcolor-white">
						<div class="page-title-heading">
							<h1 class="title"><?= the_archive_title() ?></h1>
						</div>
						<div class="breadcrumb-wrapper">
							<?= do_shortcode( '[wpseo_breadcrumb]' ) ?>
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
						<?php if ( have_posts() ) : ?>
							<div class="post-list">
								<?php
								/* Start the Loop */
								while ( have_posts() ) :
									the_post();
									get_template_part( 'template-parts/content', get_post_type() );
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
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>
					</div>
				</div>
				<?php get_template_part( 'template-parts/side-bar' ); ?>
			</div>
		</div>
	</div>


</main><!-- #main -->

<?php get_footer(); ?>
