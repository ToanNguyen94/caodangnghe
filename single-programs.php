<?php get_header(); ?>

<?php
$tab_groups = rwmb_meta('tab-groups');
$counter_groups = rwmb_meta('count');
?>
<main class="main main-Admissions main-detail-profession">
	<?php get_template_part('template-parts/single-header'); ?>

	<!-- Content -->
	<div class="content-Admissions content-detail-profession">
		<div class="container">
			<div class="tabbedPanels"> <!-- begins the tabbed panels / wrapper-->
				<ul class="tabs">
					<li data-tab="tab0" class="tab-name active">Nội dung</li>
					<?php
					foreach ($tab_groups as $key => $group) :
						$tab_names = isset($group['tab-title']) ? $group['tab-title'] : ' ';
					?>
						<li data-tab="tab<?= $key + 1 ?> " class="tab-name"> <?= $tab_names ?> </li>
					<?php endforeach; ?>
				</ul>

				<div class="panelContainer">
					<div id="tab0" class="tab-content active">
						<div class="content-content">
							<?= the_content() ?>
						</div>
					</div> <!-- end panel 1 -->
					<?php
					foreach ($tab_groups as $key2 => $group) :
						$tab_contents = isset($group['tab-content']) ? $group['tab-content'] : ' ';

					?>
						<div id="tab<?= $key2 + 1 ?>" class="tab-content">
							<?= $tab_contents ?>
						</div> <!-- end panel 2 -->
					<?php endforeach; ?>

				</div> <!-- end div class="panelContainer" or panel wrapper -->

			</div> <!-- ends the tabbed panels / wrapper-->

		</div>

	</div>

	<!-- Time -->
	<div class="time-date">
		<div class="container">
			<div class="content-time-date">
				<div class="row">
					<?php
					foreach ($counter_groups as $counter) :
						$title = isset($counter['count-title']) ? $counter['count-title'] : '';
						$number = isset($counter['count-number']) ? $counter['count-number'] : '';
					?>
						<div class="col-md-3 col-sm-6 col-6">
							<div class="item">
								<h4 class="title-1"><?= $title ?></h4>
								<h3 class="title-2"><?= $number ?></h3>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>

	<!-- Form -->
	<?php get_template_part('template-parts/home/form'); ?>

</main>
<?php get_footer(); ?>