<?php

/**
 * Begin Custom Post Types Required by theme
 */
function cptui_register_my_cpts() {

	/**
	 * Post Type: Projects.
	 */

	$labels = [
		"name" => __( "Projects", "custom-post-type-ui" ),
		"singular_name" => __( "Project", "custom-post-type-ui" ),
		"view_item" => __( "View Project", "custom-post-type-ui" ),
		"view_items" => __( "View Projects", "custom-post-type-ui" ),
		"archives" => __( "Projects", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Projects", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "projects",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => "projects",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "projects", "with_front" => false ],
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-format-aside",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "comments" ],
		"taxonomies" => [ "category", "post_tag" ],
		"show_in_graphql" => true,
		"graphql_single_name" => "Project",
		"show_in_graphql" => "Projects",
	];

	register_post_type( "project", $args );

	/**
	 * Post Type: Photos.
	 */

	$labels = [
		"name" => __( "Photos", "custom-post-type-ui" ),
		"singular_name" => __( "Photo", "custom-post-type-ui" ),
		"menu_name" => __( "Photos", "custom-post-type-ui" ),
		"all_items" => __( "All Photos", "custom-post-type-ui" ),
		"add_new" => __( "Add new", "custom-post-type-ui" ),
		"add_new_item" => __( "Add new Photo", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Photo", "custom-post-type-ui" ),
		"new_item" => __( "New Photo", "custom-post-type-ui" ),
		"view_item" => __( "View Photo", "custom-post-type-ui" ),
		"view_items" => __( "View Photos", "custom-post-type-ui" ),
		"search_items" => __( "Search Photos", "custom-post-type-ui" ),
		"not_found" => __( "No Photos found", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "No Photos found in trash", "custom-post-type-ui" ),
		"parent" => __( "Parent Photo:", "custom-post-type-ui" ),
		"featured_image" => __( "Featured image for this Photo", "custom-post-type-ui" ),
		"set_featured_image" => __( "Set featured image for this Photo", "custom-post-type-ui" ),
		"remove_featured_image" => __( "Remove featured image for this Photo", "custom-post-type-ui" ),
		"use_featured_image" => __( "Use as featured image for this Photo", "custom-post-type-ui" ),
		"archives" => __( "Photo archives", "custom-post-type-ui" ),
		"insert_into_item" => __( "Insert into Photo", "custom-post-type-ui" ),
		"uploaded_to_this_item" => __( "Upload to this Photo", "custom-post-type-ui" ),
		"filter_items_list" => __( "Filter Photos list", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Photos list navigation", "custom-post-type-ui" ),
		"items_list" => __( "Photos list", "custom-post-type-ui" ),
		"attributes" => __( "Photos attributes", "custom-post-type-ui" ),
		"name_admin_bar" => __( "Photo", "custom-post-type-ui" ),
		"item_published" => __( "Photo published", "custom-post-type-ui" ),
		"item_published_privately" => __( "Photo published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => __( "Photo reverted to draft.", "custom-post-type-ui" ),
		"item_scheduled" => __( "Photo scheduled", "custom-post-type-ui" ),
		"item_updated" => __( "Photo updated.", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Parent Photo:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Photos", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "photos",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => "photos",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "photo", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 8,
		"menu_icon" => "dashicons-format-image",
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
		"taxonomies" => [ "category", "post_tag" ],
		"show_in_graphql" => true,
		"graphql_single_name" => "Photo",
		"show_in_graphql" => "Photos",
	];

	register_post_type( "photo", $args );

	/**
	 * Post Type: Bookmarks.
	 */

	$labels = [
		"name" => __( "Bookmarks", "custom-post-type-ui" ),
		"singular_name" => __( "Bookmark", "custom-post-type-ui" ),
		"menu_name" => __( "Bookmarks", "custom-post-type-ui" ),
		"all_items" => __( "All Bookmarks", "custom-post-type-ui" ),
		"add_new" => __( "Add new", "custom-post-type-ui" ),
		"add_new_item" => __( "Add new Bookmark", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Bookmark", "custom-post-type-ui" ),
		"new_item" => __( "New Bookmark", "custom-post-type-ui" ),
		"view_item" => __( "View Bookmark", "custom-post-type-ui" ),
		"view_items" => __( "View Bookmarks", "custom-post-type-ui" ),
		"search_items" => __( "Search Bookmarks", "custom-post-type-ui" ),
		"not_found" => __( "No Bookmarks found", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "No Bookmarks found in trash", "custom-post-type-ui" ),
		"parent" => __( "Parent Bookmark:", "custom-post-type-ui" ),
		"featured_image" => __( "Featured image for this Bookmark", "custom-post-type-ui" ),
		"set_featured_image" => __( "Set featured image for this Bookmark", "custom-post-type-ui" ),
		"remove_featured_image" => __( "Remove featured image for this Bookmark", "custom-post-type-ui" ),
		"use_featured_image" => __( "Use as featured image for this Bookmark", "custom-post-type-ui" ),
		"archives" => __( "Bookmark archives", "custom-post-type-ui" ),
		"insert_into_item" => __( "Insert into Bookmark", "custom-post-type-ui" ),
		"uploaded_to_this_item" => __( "Upload to this Bookmark", "custom-post-type-ui" ),
		"filter_items_list" => __( "Filter Bookmarks list", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Bookmarks list navigation", "custom-post-type-ui" ),
		"items_list" => __( "Bookmarks list", "custom-post-type-ui" ),
		"attributes" => __( "Bookmarks attributes", "custom-post-type-ui" ),
		"name_admin_bar" => __( "Bookmark", "custom-post-type-ui" ),
		"item_published" => __( "Bookmark published", "custom-post-type-ui" ),
		"item_published_privately" => __( "Bookmark published privately.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => __( "Bookmark reverted to draft.", "custom-post-type-ui" ),
		"item_scheduled" => __( "Bookmark scheduled", "custom-post-type-ui" ),
		"item_updated" => __( "Bookmark updated.", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Parent Bookmark:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Bookmarks", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "bookmarks",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => "bookmarks",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "bookmark", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 9,
		"menu_icon" => "dashicons-heart",
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
		"taxonomies" => [ "category", "post_tag" ],
		"show_in_graphql" => true,
		"graphql_single_name" => "Bookmark",
		"show_in_graphql" => "Bookmarks",
	];

	register_post_type( "bookmark", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

add_filter('graphql_connection_max_query_amount', function($amount, $source, $args, $context, $info) {
	$amount = 1500; // whatever you want the limit to be, in this case 1000.
	return $amount;
}, 10, 5 );

add_action( 'graphql_register_types', function() {
	register_graphql_field( 'Post', 'contentFiltered', [
	  'type' => 'String',
	  'description' => __( 'post_content_filtered field added to the Post Type', 'post-content-filtered-graphql' ),
	  'resolve' => function( \WPGraphQL\Model\Post $post, $args, $context, $info ) {
		  return get_post_field( 'post_content_filtered', $post->databaseId );
	  }
	]);
	register_graphql_field( 'Project', 'contentFiltered', [
	  'type' => 'String',
	  'description' => __( 'post_content_filtered field added to the Project Post Type', 'project-post-content-filtered-graphql' ),
	  'resolve' => function( \WPGraphQL\Model\Post $project, $args, $context, $info ) {
		  return get_post_field( 'post_content_filtered', $project->databaseId );
	  }
	]);
});
