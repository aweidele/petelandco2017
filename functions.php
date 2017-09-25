<?php

// Enqueue Scripts and Styles
function enqueue_styles() {
	wp_enqueue_style( 'google_fonts',
      '//fonts.googleapis.com/css?family=Cormorant+Garamond:400,400i,700|Open+Sans:300'
  );

  wp_enqueue_style( 'main_style',
      get_stylesheet_directory_uri() . '/css/main.css'
  );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

// Add Menus
add_action( 'init', 'register_menus' );
function register_menus() {
  register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
  //register_nav_menu( 'footer-menu', __( 'Footer Menu' ) );
}

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Colors', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Color', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Colors', 'text_domain' ),
		'name_admin_bar'        => __( 'Colors', 'text_domain' ),
		'archives'              => __( '', 'text_domain' ),
		'attributes'            => __( '', 'text_domain' ),
		'parent_item_colon'     => __( '', 'text_domain' ),
		'all_items'             => __( 'All Colors', 'text_domain' ),
		'add_new_item'          => __( 'Add New Color', 'text_domain' ),
		'add_new'               => __( 'Add New Color', 'text_domain' ),
		'new_item'              => __( 'New Color', 'text_domain' ),
		'edit_item'             => __( 'Edit Color', 'text_domain' ),
		'update_item'           => __( 'Update Color', 'text_domain' ),
		'view_item'             => __( 'View Color', 'text_domain' ),
		'view_items'            => __( 'View Colros', 'text_domain' ),
		'search_items'          => __( 'Search Colors', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( '', 'text_domain' ),
		'set_featured_image'    => __( '', 'text_domain' ),
		'remove_featured_image' => __( '', 'text_domain' ),
		'use_featured_image'    => __( '', 'text_domain' ),
		'insert_into_item'      => __( '', 'text_domain' ),
		'uploaded_to_this_item' => __( '', 'text_domain' ),
		'items_list'            => __( '', 'text_domain' ),
		'items_list_navigation' => __( '', 'text_domain' ),
		'filter_items_list'     => __( '', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Color', 'text_domain' ),
		'description'           => __( 'Defines the colors used in the site', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'custom-fields', ),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-art',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'petel-color', $args );

}
add_action( 'init', 'custom_post_type', 0 );

// Icon function
function icon($icon) {
	return '<span class="icon icon-'.$icon.'"></span>';
}
