<?php

/* Slug for CPT plugin	*/
define('MVPWP_SLUG', 'projects');


/* Labels for CPT plugin	*/
function cafinitybs4_mvpwp_product_labels( $labels ) {
	$labels = array(
	   'singular' => __('Project', 'cafinitybs4'),
	   'plural'   => __('Projects', 'cafinitybs4')
	);
	return $labels;
}
add_filter('mvpwp_default_projects_name', 'cafinitybs4_mvpwp_product_labels');