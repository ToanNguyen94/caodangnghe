<?php

namespace Titanweb\cdn;

class Menu
{
	public function __construct()
	{
		add_filter('nav_menu_link_attributes', [$this, 'add_menu_link_attributes'], 10, 4);
		add_filter('walker_nav_menu_start_el', [$this, 'add_dropdown_icons'], 10, 4);
	}

	/**
	 * Adjustments to menu attributes to support WCAG 2.0 recommendations for flyout and dropdown menus.
	 * @link https://www.w3.org/WAI/tutorials/menus/flyout/
	 */
	public function add_menu_link_attributes($atts, $item, $args, $depth)
	{
		$item_has_children = in_array('menu-item-has-children', $item->classes);
		if ($item_has_children) {
			$atts['aria-haspopup'] = 'true';
			$atts['aria-expanded'] = 'false';
		}
		return $atts;
	}

	public function add_dropdown_icons($output, $item, $depth, $args)
	{
		if (isset($args->theme_location) && 'primary' === $args->theme_location && in_array('menu-item-has-children', $item->classes, true)) {
			// Translators: %s - Menu item title.
			$output =  $output  . '<i class="fa-solid fa-chevron-down" style="color: #ffffff;"></i>';
		}
		return $output;
	}
}
