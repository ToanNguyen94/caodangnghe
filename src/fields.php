<?php

namespace Titanweb\cdn;

class Fields
{

	public function __construct()
	{
		add_filter('rwmb_meta_boxes', [$this, 'register']);
		add_action('init', [$this, 'register_post_type']);
		add_action('init', [$this, 'register_taxonomy']);
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

	// Post-type
	function register_post_type()
	{
		$labels = [
			'name'                     => esc_html__('Programs', 'cdn'),
			'singular_name'            => esc_html__('Programs', 'cdn'),
			'add_new'                  => esc_html__('Add New', 'cdn'),
			'add_new_item'             => esc_html__('Add new programs', 'cdn'),
			'edit_item'                => esc_html__('Edit Programs', 'cdn'),
			'new_item'                 => esc_html__('New Programs', 'cdn'),
			'view_item'                => esc_html__('View Programs', 'cdn'),
			'view_items'               => esc_html__('View Programs', 'cdn'),
			'search_items'             => esc_html__('Search Programs', 'cdn'),
			'not_found'                => esc_html__('No programs found', 'cdn'),
			'not_found_in_trash'       => esc_html__('No programs found in Trash', 'cdn'),
			'parent_item_colon'        => esc_html__('Parent Programs:', 'cdn'),
			'all_items'                => esc_html__('All Programs', 'cdn'),
			'archives'                 => esc_html__('Programs Archives', 'cdn'),
			'attributes'               => esc_html__('Programs Attributes', 'cdn'),
			'insert_into_item'         => esc_html__('Insert into programs', 'cdn'),
			'uploaded_to_this_item'    => esc_html__('Uploaded to this programs', 'cdn'),
			'featured_image'           => esc_html__('Featured image', 'cdn'),
			'set_featured_image'       => esc_html__('Set featured image', 'cdn'),
			'remove_featured_image'    => esc_html__('Remove featured image', 'cdn'),
			'use_featured_image'       => esc_html__('Use as featured image', 'cdn'),
			'menu_name'                => esc_html__('Programs', 'cdn'),
			'filter_items_list'        => esc_html__('Filter programs list', 'cdn'),
			'filter_by_date'           => esc_html__('', 'cdn'),
			'items_list_navigation'    => esc_html__('Programs list navigation', 'cdn'),
			'items_list'               => esc_html__('Programs list', 'cdn'),
			'item_published'           => esc_html__('Programs published', 'cdn'),
			'item_published_privately' => esc_html__('Programs published privately', 'cdn'),
			'item_reverted_to_draft'   => esc_html__('Programs reverted to draft', 'cdn'),
			'item_scheduled'           => esc_html__('Programs scheduled', 'cdn'),
			'item_updated'             => esc_html__('Programs updated', 'cdn'),
		];
		$args   = [
			'label'               => esc_html__('Programs', 'cdn'),
			'labels'              => $labels,
			'description'         => '',
			'public'              => true,
			'hierarchical'        => false,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'show_in_rest'        => true,
			'query_var'           => true,
			'can_export'          => true,
			'delete_with_user'    => true,
			'has_archive'         => true,
			'rest_base'           => '',
			'show_in_menu'        => true,
			'menu_position'       => '',
			'menu_icon'           => 'dashicons-businessman',
			'capability_type'     => 'post',
			'supports'            => ['title', 'editor', 'thumbnail'],
			'taxonomies'          => [],
			'rewrite'             => [
				'with_front' => false,
			],
		];

		register_post_type('programs', $args);
	}

	// Taxonomy
	function register_taxonomy()
	{
		$labels = [
			'name'                       => esc_html__('Ngành', 'cdn'),
			'singular_name'              => esc_html__('Ngành', 'cdn'),
			'menu_name'                  => esc_html__('Ngành', 'cdn'),
			'search_items'               => esc_html__('Search Ngành', 'cdn'),
			'popular_items'              => esc_html__('Popular Ngành', 'cdn'),
			'all_items'                  => esc_html__('All Ngành', 'cdn'),
			'parent_item'                => esc_html__('Parent Ngành', 'cdn'),
			'parent_item_colon'          => esc_html__('Parent Ngành', 'cdn'),
			'edit_item'                  => esc_html__('Edit Ngành', 'cdn'),
			'view_item'                  => esc_html__('View Ngành', 'cdn'),
			'update_item'                => esc_html__('Update Ngành', 'cdn'),
			'add_new_item'               => esc_html__('Add new ngành', 'cdn'),
			'new_item_name'              => esc_html__('New ngành name', 'cdn'),
			'separate_items_with_commas' => esc_html__('Separate ngành with commas', 'cdn'),
			'add_or_remove_items'        => esc_html__('Add or remove ngành', 'cdn'),
			'choose_from_most_used'      => esc_html__('Choose most used ngành', 'cdn'),
			'not_found'                  => esc_html__('No ngành found', 'cdn'),
			'no_terms'                   => esc_html__('No Ngành loại', 'cdn'),
			'filter_by_item'             => esc_html__('Filter by ngành', 'cdn'),
			'items_list_navigation'      => esc_html__('Ngành list pagination', 'cdn'),
			'items_list'                 => esc_html__('Ngành list', 'cdn'),
			'most_used'                  => esc_html__('Most Used', 'cdn'),
			'back_to_items'              => esc_html__('Back to Ngành', 'cdn'),
		];
		$args   = [
			'label'              => esc_html__('Ngành', 'cdn'),
			'labels'             => $labels,
			'description'        => '',
			'public'             => true,
			'publicly_queryable' => true,
			'hierarchical'       => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_nav_menus'  => true,
			'show_in_rest'       => true,
			'show_tagcloud'      => true,
			'show_in_quick_edit' => true,
			'show_admin_column'  => false,
			'query_var'          => true,
			'sort'               => false,
			'meta_box_cb'        => 'post_categories_meta_box',
			'rest_base'          => '',
			'rewrite'            => [
				'with_front'   => false,
				'hierarchical' => false,
			],
		];
		register_taxonomy('nganh', ['programs'], $args);
	}
}
