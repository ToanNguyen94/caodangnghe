<?php

namespace Titanweb\cdn;

class Fields
{

	public function __construct()
	{
		add_filter('rwmb_meta_boxes', [$this, 'register']);
	}
	public function register($meta_boxes)
	{
		// $meta_boxes[] = $this->banner();

		return $meta_boxes;
	}

	// public function banner() {
	// 	return [
	// 		'title'      => __( 'Cài đặt trang', 'cdn' ),
	// 		'post_types' => [ 'page' ],
	// 		'tab_style'  => 'left',
	// 		'include'    => [
	// 			'relation' => 'OR',
	// 			'template' => [ 'page-templates/about-page.php' ],
	// 		],
	// 		'fields'     => [
	// 			[
	// 				'name'              => esc_html__( 'Ảnh', 'cdn' ),
	// 				'id'                => 'left-image',
	// 				'type'              => 'single_image',
	// 				'label_description' => __( '132*108', 'cdn' ),
	// 			],
	// 		],
	// 	];
	// }
}
