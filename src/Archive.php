<?php

namespace Titanweb\cdn;

class Archive
{

	public function __construct()
	{

		add_filter('body_class', [$this, 'add_body_classes']);

		add_filter('excerpt_more', [$this, 'continue_reading_link']);
		add_filter('the_content_more_link', [$this, 'continue_reading_link']);

		add_filter('excerpt_length', [$this, 'change_excerpt_length']);

		add_filter('get_the_archive_title', [$this, 'change_archive_title']);
	}


	public function add_body_classes($classes)
	{
		// Adds a class of hfeed to non-singular pages.
		if (!is_singular()) {
			$classes[] = 'hfeed';
		}

		// Adds a class of no-sidebar when there is no sidebar present.
		if (!is_active_sidebar('sidebar-1')) {
			$classes[] = 'no-sidebar';
		}

		return $classes;
	}

	public function continue_reading_link($excerpt)
	{
		return '&hellip;<p class="more"><a class="readmore" href="' . esc_url(get_permalink()) . '">' . __('Xem chi tiết [+]', 'nano') . '</a></p>';
		// return str_replace( '[&hellip;]', '...', $excerpt );
	}

	public function change_excerpt_length()
	{
		return 50;
	}

	public function change_archive_title($title)
	{
		if (is_category() || is_tag() || is_tax()) {
			$title = single_term_title('', false);
		} elseif (is_post_type_archive()) {
			$title = post_type_archive_title('', false);
		}
		return $title;
	}
}
