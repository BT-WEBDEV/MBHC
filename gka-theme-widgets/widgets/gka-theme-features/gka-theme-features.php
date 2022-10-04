<?php
/*
* Widget Name: (GKA)+ Features
* Description: A widget which allows add Features
* Author: GKA Creative Agency
* Author URI: https://gkaadvertising.com/
*/

class GKA_Theme_Features_Widget extends SiteOrigin_Widget {

    function __construct() {

		parent::__construct(
			'gka-theme-features',
			__('(GKA)+ Features', 'gka-theme-widgets'),
			array(
				'description' => __('A widget which allows add Features.', 'gka-theme-widgets')
			),
			array(),
			false,
			plugin_dir_path(__FILE__)
        );
        
    }
    
    function get_widget_form() {

		// Gets taxonomy objects and extracts the 'label' field from each one.
		$categories = wp_list_pluck( get_categories( array('orderby' => 'term_id', 'order'   => 'ASC') ), 'name', 'term_id' );

        return array(
			'title' => array(
				'type' => 'text',
				'label' => __('Title', 'gka-theme-widgets'),
			),
        );
    }

    public function get_template_variables( $instance, $args ) {
		// Return your instance value here
        return array(
			// 'textfield' => $instance['textfield'],
		);
	}	
}

siteorigin_widget_register( 'gka-theme-features', __FILE__, 'GKA_Theme_Features_Widget' );