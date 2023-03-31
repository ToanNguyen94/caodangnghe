<div class="item-new">
	<div class="image">
		<a href="<?= the_permalink() ?>">
			<?= the_post_thumbnail() ?>
		</a>
	</div>
	<div class="nav-image">
		<h3 class="title"><a href="<?= the_permalink() ?>"><?= the_title() ?></a>
		</h3>
		<div class="date-desc" style="height: auto">
			<div class="date">
				<span class="span1"><?= get_the_date('d') ?></span>
				<span class="span2"><?= get_the_date('m-Y') ?></span>
			</div>
			<div class="description">
				<?= the_excerpt() ?>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>