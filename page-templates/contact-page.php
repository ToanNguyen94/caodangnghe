<?php // @codingStandardsIgnoreLine
/**
 * Template Name: Liên hệ page
 */
?>
<?php get_header(); ?>

<main id="primary" class="site-main ">

	<?php
	get_template_part('template-parts/page-header');

	$title = rwmb_meta('contact-title');
	$info_groups = rwmb_meta('info');
	$map = rwmb_meta('link-map');

	?>
	<div id="main-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-12">
					<div class="content-contact">
						<h1 class="title-contact"><?= $title ?></h1>
						<ul class="adress-contact">
							<?php
							foreach ($info_groups as $key => $info) :
								$name = isset($info['info-name']) ? $info['info-name'] : '';
								$desc = isset($info['info-desc']) ? $info['info-desc'] : '';
							?>
								<li class="li<?= $key + 1 ?>"><span><?= $name ?>: </span><?= $desc ?></li>

							<?php endforeach; ?>
						</ul>
					</div>

					<div class="form-contat">
						<?= do_shortcode('[fluentform id="2"]') ?>
					</div>

				</div>

				<div class="col-md-6 col-12 ">
					<div class="map-contact">
						<?= wpautop($map) ?>
					</div>
				</div>

			</div>

		</div>


	</div>
</main>

<?php get_footer(); ?>