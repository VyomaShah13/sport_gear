<?php
/**
* Custom post types
*
*/

function sport_init() {
    $labels = array(
        'name'                  => _x( 'Sport brands', 'Post type general name', 'sportbrand' ),
        'singular_name'         => _x( 'Sport brand', 'Post type singular name', 'sportbrand' ),
        'menu_name'             => _x( 'Sport Brand', 'Admin Menu text', 'sportbrand' ),
        'name_admin_bar'        => _x( 'Sport Brand', 'Add New on Toolbar', 'sportbrand' ),
        'add_new'               => __( 'Add New', 'sportbrand' ),
        'add_new_item'          => __( 'Add New Sport Brand', 'sportbrand' ),
        'new_item'              => __( 'New sport brand', 'sportbrand' ),
        'edit_item'             => __( 'Edit sport brand', 'sportbrand' ),
        'view_item'             => __( 'View sport brand', 'sportbrand' ),
        'all_items'             => __( 'All sport brands', 'sportbrand' ),
        'search_items'          => __( 'Search sport brands', 'sportbrand' ),
        'parent_item_colon'     => __( 'Parent sport brands:', 'sportbrand' ),
        'not_found'             => __( 'No sport brands found.', 'sportbrand' ),
        'not_found_in_trash'    => __( 'No sport brands found in Trash.', 'sportbrand' ),
        'featured_image'        => _x( 'Sport Brand Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'sportbrand' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'sportbrand' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'sportbrand' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'sportbrand' ),
        'archives'              => _x( 'Sport brand archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'sportbrand' ),
        'insert_into_item'      => _x( 'Insert into sport brand', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'sportbrand' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this sport brand', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'sportbrand' ),
        'filter_items_list'     => _x( 'Filter sport brands list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'sportbrand' ),
        'items_list_navigation' => _x( 'Sport brands list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'sportbrand' ),
        'items_list'            => _x( 'Sport brands list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'sportbrand' ),
    );     
    $args = array(
        'labels'             => $labels,
        'description'        => 'Sport brand custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'sportbrands' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-shield',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail' ),
        'show_in_rest'       => true,
    );
    
    register_post_type( 'sport_brand', $args );
}
add_action( 'init', 'sport_init' );