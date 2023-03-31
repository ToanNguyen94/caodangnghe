<?php // @codingStandardsIgnoreLine
/**
 * Template Name: Home page
 */
?>
<?php get_header(); ?>

<main id="primary" class="site-main ">

	<?php
	get_template_part( 'template-parts/home/banner' );
	get_template_part( 'template-parts/home/list-event' );
	get_template_part( 'template-parts/home/list-guong' );
	get_template_part( 'template-parts/home/education-program' );
	get_template_part( 'template-parts/home/new' );
	get_template_part( 'template-parts/home/typical-face' );
	get_template_part( 'template-parts/home/guong-mat' );
	get_template_part( 'template-parts/home/home-video' );
	get_template_part( 'template-parts/home/partner' );


	?>
</main>

<?php get_footer(); ?>
