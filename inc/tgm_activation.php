<?php
/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Gka_theme for publication on WordPress.org
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 *
 * Depending on your implementation, you may want to change the include call:
 *
 * Parent Theme:
 * require_once get_template_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Child Theme:
 * require_once get_stylesheet_directory() . '/path/to/class-tgm-plugin-activation.php';
 *
 * Plugin:
 * require_once dirname( __FILE__ ) . '/path/to/class-tgm-plugin-activation.php';
 */
require_once get_template_directory() . '/TGM-Plugin-Activation/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'gka_theme_register_required_plugins' );

/**
 * Register the required plugins for this theme.
 *
 * In this example, we register five plugins:
 * - one included with the TGMPA library
 * - two from an external source, one from an arbitrary source, one from a GitHub repository
 * - two from the .org repo, where one demonstrates the use of the `is_callable` argument
 *
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * This function is hooked into `tgmpa_register`, which is fired on the WP `init` action on priority 10.
 */
function gka_theme_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
			'name'        => 'Advanced Custom Fields',
			'slug'        => 'advanced-custom-fields',
			'required'     => true, 
		),
		array(
			'name'        => 'NextGEN Gallery',
			'slug'        => 'nextgen-gallery',
			'required'     => true, 
		),
		array(
			'name'        => 'Classic Editor',
			'slug'        => 'classic-editor',
			'required'     => true, 
		),
		array(
			'name'        => 'Classic Widgets',
			'slug'        => 'classic-widgets',
			'required'     => true, 
		),
		array(
			'name'        => 'Classic Widgets',
			'slug'        => 'classic-widgets',
			'required'     => true, 
		),
		array(
			'name'        => 'Custom Sidebars',
			'slug'        => 'custom-sidebars',
			'required'     => true, 
		),
		array(
			'name'        => 'Page Builder by SiteOrigin',
			'slug'        => 'siteorigin-panels',
			'required'     => true, 
		),
		array(
			'name'        => 'SiteOrigin Widgets Bundle',
			'slug'        => 'so-widgets-bundle',
			'required'     => true, 
		),
		array(
			'name'        => 'WPForms Lite',
			'slug'        => 'wpforms-lite',
			'required'     => true, 
		),

		// Recommended
		array(
			'name'        => 'Admin Columns',
			'slug'        => 'codepress-admin-columns',
		),
		array(
			'name'        => 'All-in-One WP Migration',
			'slug'        => 'all-in-one-wp-migration',
		),
		array(
			'name'        => 'Custom Post Type UI',
			'slug'        => 'custom-post-type-ui',
		),
		array(
			'name'        => 'Jetpack',
			'slug'        => 'jetpack',
		),
		array(
			'name'        => 'Post Types Order',
			'slug'        => 'post-types-order',
		),
		array(
			'name'        => 'NextGEN Custom Fields',
			'slug'        => 'nextgen-gallery-custom-fields',
		),
		array(
			'name'        => 'Widget Disable',
			'slug'        => 'wp-widget-disable',
		),
		array(
			'name'        => 'Yoast Duplicate Post',
			'slug'        => 'duplicate-post',
		),
		array(
			'name'        => 'Litespeed Cache',
			'slug'        => 'litespeed-cache',
		),
		array(
			'name'        => 'WordPress SEO by Yoast',
			'slug'        => 'wordpress-seo',
			'is_callable' => 'wpseo_init',
		),
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'gka_theme',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => false,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'gka_theme' ),
			'menu_title'                      => __( 'Install Plugins', 'gka_theme' ),
			/* translators: %s: plugin name. * /
			'installing'                      => __( 'Installing Plugin: %s', 'gka_theme' ),
			/* translators: %s: plugin name. * /
			'updating'                        => __( 'Updating Plugin: %s', 'gka_theme' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'gka_theme' ),
			'notice_can_install_required'     => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'gka_theme'
			),
			'notice_can_install_recommended'  => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'gka_theme'
			),
			'notice_ask_to_update'            => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'gka_theme'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				/* translators: 1: plugin name(s). * /
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'gka_theme'
			),
			'notice_can_activate_required'    => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'gka_theme'
			),
			'notice_can_activate_recommended' => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'gka_theme'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'gka_theme'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'gka_theme'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'gka_theme'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'gka_theme' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'gka_theme' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'gka_theme' ),
			/* translators: 1: plugin name. * /
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'gka_theme' ),
			/* translators: 1: plugin name. * /
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'gka_theme' ),
			/* translators: 1: dashboard link. * /
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'gka_theme' ),
			'dismiss'                         => __( 'Dismiss this notice', 'gka_theme' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'gka_theme' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'gka_theme' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
		*/
	);

	tgmpa( $plugins, $config );
}
