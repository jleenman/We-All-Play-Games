<?php
/**
 * Custom Post Type functions
 */

//	Adding a roots_wrap_base filter
	function roots_wrap_base_cpts($templates) {
		$cpt = get_post_type(); // Get the current post type
		if ($cpt) {
			array_unshift($templates, 'base-' . $cpt . '.php'); // Shift the template to the front of the array
		}
		return $templates; // Return our modified array with base-$cpt.php at the front of the queue
	}
	add_filter('roots_wrap_base', 'roots_wrap_base_cpts'); // Add our function to the roots_wrap_base filter


// 	Fix nav menu active classes for custom post types
	function roots_cpt_active_menu($menu) {
		global $post;
		if ('resources' === get_post_type()) {
			$menu = str_replace('active', '', $menu);
			$menu = str_replace('menu-resources', 'active menu-resources', $menu);
		}
		return $menu;
	}
	add_filter('nav_menu_css_class', 'roots_cpt_active_menu', 400);

?>