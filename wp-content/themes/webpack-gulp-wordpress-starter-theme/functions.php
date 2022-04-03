<?php

// CPT TAXONOMY

include( 'configure/cpt-taxonomy.php' );

// Utilities

include( 'configure/utilities.php' );

// CONFIG

include( 'configure/configure.php' );

// JAVASCRIPT & CSS

include( 'configure/js-css.php' );

// SHORTCODES

include( 'configure/shortcodes.php' );

// ACF

include( 'configure/acf.php' );

// HOOKS ADMIN

if(is_admin()) {
	include( 'configure/admin.php' );
}

function remove_admin_bar()
{
    return false;
}

add_filter('show_admin_bar', 'remove_admin_bar', PHP_INT_MAX);

register_nav_menus(array(
    'main-menu'      => 'Main Menu',
));

if (!function_exists('theme_scripts')) {
	/**
	 * Register and/or Enqueue
	 * Scripts for the theme
	 *
	 * @since 1.0
	 */
	function theme_scripts()
	{
		$theme_dir = get_template_directory_uri();

		wp_enqueue_script('main', "$theme_dir/assets/js/main.js", array('jquery'), null, true);
	}
}