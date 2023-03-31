<?php
	$groups = rwmb_meta( 'post-group', array( 'object_type' => 'setting' ), 'setting-page' );
foreach ( $groups as $key1 => $group ) {
	$posts  = $groups[0]['select_post'];
	$posts1 = $groups[1]['select_post'];
	$posts2 = $groups[2]['select_post'];
}
?>
<section class="Typical-face-home">
				<div class="container">
					<h2 class="title-primary center">Thành tựu và gương mặt nổi bật</h2>
					<div class="nav-Typical-face">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-6">
								<div class="item">
									<?php
									foreach ( $posts as $key => $post ) :
										$number = $key + 1;
										?>
									<div class="<?='item-' . $number ?> item-11">
										<?= get_the_post_thumbnail() ?>
										<div class="text">
											<h3 class="title-1">
												<a href="<?= the_permalink() ?>"><?= get_the_title() ?></a>
											</h3>
										</div>
									</div>
									<?php endforeach; ?>
								</div>
							</div>

							<div class="col-md-4 col-sm-4 col-6">
								<div class="item item2">
									<?php
									foreach ( $posts1 as $key => $post ) :
										$number = $key + 1;
										?>
									<div class="<?='item-' . $number ?> item-11">
										<?= get_the_post_thumbnail() ?>
										<div class="text">
											<h3 class="title-1">
												<a href="<?= the_permalink() ?>"><?= get_the_title() ?></a>
											</h3>
										</div>
									</div>
									<?php endforeach; ?>
								</div>
							</div>

							<div class="col-md-4 col-sm-4 col-6">
								<div class="item">
									<?php
									foreach ( $posts2 as $key => $post ) :
										$number = $key + 1;
										?>
									<div class="<?='item-' . $number ?> item-11">
										<?= get_the_post_thumbnail() ?>
										<div class="text">
											<h3 class="title-1">
												<a href="<?= the_permalink() ?>"><?= get_the_title() ?></a>
											</h3>
										</div>
									</div>
									<?php endforeach; ?>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>