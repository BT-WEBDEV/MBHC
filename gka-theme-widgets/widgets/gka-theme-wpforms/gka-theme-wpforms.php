<?php
/*
* Widget Name: (GKA)+ WP Forms
* Description: A widget which allows add WP Form.
* Author: GKA Creative Agency
* Author URI: https://gkaadvertising.com/
*/

class GKA_Theme_WPForms_Widget extends SiteOrigin_Widget {

    function __construct() {

		parent::__construct(
			'gka-theme-wpforms',
			__('(GKA)+ WP Forms', 'gka-theme-widgets'),
			array(
				'description' => __('A widget which allows add WP Form.', 'gka-theme-widgets'),
				'help' => 'https://siteorigin.com/widgets-bundle/editor-widget/'
			),
			array(),
			false,
			plugin_dir_path(__FILE__)
        );
        
    }
    
    function get_widget_form() {

        // Get available WPForm
		$forms = wpforms()->form->get();
		$wpforms = wp_list_pluck( $forms, 'post_title', 'ID' );

        return array(
			'title' => array(
				'type' => 'text',
				'label' => __('title', 'gka-theme-widgets'),
			),
            'wpforms' => array(
				'type'    => 'select',
				'label'   => __( 'WPForms', 'gka-widgets-bundle' ),
				'options' => $wpforms,
			),
        );
    }

    public function get_template_variables( $instance, $args ) {
		// Return your instance value here
        return array(
			'title' => $instance['title'],
            // Form
			'wpforms' => $instance['wpforms'],
		);
	}
	
}

siteorigin_widget_register( 'gka-theme-wpforms', __FILE__, 'GKA_Theme_WPForms_Widget' );