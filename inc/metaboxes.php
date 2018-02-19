<?php

add_action( 'cmb2_admin_init', 'cmb2_cafinitybs4_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_cafinitybs4_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cafinitybs4_';

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'about_metabox',
		'title'         => __( 'About Metabox', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on'       => array( 'key' => 'page-template', 'value' => 'templates/about.php' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Input Area for left column
	$cmb->add_field( array(
		'name'       => __( 'Left Column', 'cmb2' ),
		'desc'       => __( 'Content for left column', 'cmb2' ),
		'id'         => $prefix . 'left',
		'type'       => 'textarea',

	) );

	// Input Area for right column
	$cmb->add_field( array(
		'name'       => __( 'Right Column', 'cmb2' ),
		'desc'       => __( 'Content for right column', 'cmb2' ),
		'id'         => $prefix . 'right',
		'type'       => 'textarea',

	) );

	/**
	 * Metabox for project
	 */
	
	$cmb_project = new_cmb2_box( array(
		'id'            => 'project_metabox',
		'title'         => __( 'Images', 'cafinitybs4' ),
		'object_types'  => array( 'project', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Input Area for left column
	$cmb_project->add_field( array(
		'name'       => __( 'Images', 'cafinitybs4' ),
		'desc'       => __( 'Upload images', 'cafinitybs4' ),
		'id'         => $prefix . 'images',
		'type'       => 'file_list',

	) );

}

	