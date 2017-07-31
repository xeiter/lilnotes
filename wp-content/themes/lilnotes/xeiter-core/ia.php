<?php

/**
 * Register custom post types
 *
 * @param array $post_types
 *
 * @return mixed
 */
add_filter( 'piklist_post_types', function( $post_types ) {

	// "Partner" custom post type
	$post_types['recipe'] = array(

		'labels'           => piklist( 'post_type_labels', 'Recipe' ),
		'title'            => __( 'Enter a new Recipe title' ),
		'menu_icon'        => 'dashicons-randomize',
		'supports'         => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'public'           => true,
		'has_archive'      => true,
		'rewrite'          => array( 'slug' => 'recipe' ),
		'edit_columns'     => array(
			'title'  => __( 'Recipe Title' ),
			'author' => __( 'Assigned to' )
		),
		'hide_meta_box'    => array( 'author' ),
		'publicly_queryable'  => true

	);

	// "We represent" custom post type
	/*$post_types['we-represent'] = array(

		'labels'           => piklist( 'post_type_labels', 'We represent' ),
		'title'            => __( 'Enter a title' ),
		'menu_icon'        => 'dashicons-randomize',
		'supports'         => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'public'           => true,
		'has_archive'      => false,
		'rewrite'          => array( 'slug' => 'we-represent' ),
		'capability_type'  => 'post',
		'edit_columns'     => array(
			'title'  => __( '"We represent" Title' ),
			'author' => __( 'Assigned to' )
		),
		'hide_meta_box'    => array( 'author' ),
		'publicly_queryable'  => false

	);

	// "We represent" custom post type
	$post_types['involvement'] = array(

		'labels'           => piklist( 'post_type_labels', 'Involvement' ),
		'title'            => __( 'Enter a title' ),
		'menu_icon'        => 'dashicons-randomize',
		'supports'         => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'public'           => true,
		'has_archive'      => false,
		'rewrite'          => array( 'slug' => 'involvement' ),
		'capability_type'  => 'post',
		'edit_columns'     => array(
			'title'  => __( 'Involvement Title' ),
			'author' => __( 'Assigned to' )
		),
		'hide_meta_box'    => array( 'author' ),
		'publicly_queryable'  => false

	);

	// "We represent" custom post type
	$post_types['az-shortcode'] = array(

		'labels'           => piklist( 'post_type_labels', 'Shortcode' ),
		'title'            => __( 'Enter a title' ),
		'menu_icon'        => 'dashicons-randomize',
		'supports'         => array( 'title', 'editor', 'thumbnail', 'excerpt', 'permalink' ),
		'public'           => true,
		'has_archive'      => false,
		'rewrite'          => array( 'slug' => 'as-shortcode' ),
		'capability_type'  => 'post',
		'edit_columns'     => array(
			'title'  => __( 'Shortcode Title' ),
			'author' => __( 'Assigned to' )
		),
		'hide_meta_box'    => array( 'author' ),
		'publicly_queryable'  => true

	);*/

	/*// "Approach" custom post type
	$post_types['approach'] = array(

		'labels'           => piklist( 'post_type_labels', 'Approach' ),
		'title'            => __( 'Enter a new Approach title' ),
		'menu_icon'        => 'dashicons-randomize',
		'supports'         => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'public'           => true,
		'has_archive'      => false,
		'rewrite'          => array( 'slug' => 'approach' ),
		'capability_type'  => 'post',
		'edit_columns'     => array(
			'title'  => __( 'Approach Title' ),
			'author' => __( 'Assigned to' )
		),
		'hide_meta_box'    => array( 'author' ),
		'publicly_queryable'  => false

	);*/

	return $post_types;
});

/*
add_filter( 'piklist_taxonomies', 'xc_register_taxonomy_to_partner_cpt' );

function xc_register_taxonomy_to_partner_cpt( $taxonomies ) {

	$taxonomies[] = array(

		'post_type' => 'partner',
		'name' => 'partner_category',
		'show_admin_column' => true,
		'configuration' => array(
			'hierarchical' => true,
			'labels' => piklist( 'taxonomy_labels', 'Partner Category' ),
			'hide_meta_box' => false,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array( 'slug' => 'partner-category' )
		)

	);

	return $taxonomies;

}

*/