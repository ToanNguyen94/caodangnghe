<?php
$taxonomy_name = 'category';
if (is_singular('programs')) {
	$taxonomy_name = 'nganh';
}
$terms = get_the_terms(get_the_ID(), $taxonomy_name);
$title = $terms[0]->name;
?>
<div class="ttm-page-title-row">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-box ttm-textcolor-white">
					<div class="page-title-heading">
						<h1 class="title"><?= $title ?></h1>
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