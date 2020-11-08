<?php
    function commander_custom_post_type() {
        $labels = array(
            'name'               => _x( 'Commanders', 'post type general name' ),
            'singular_name'      => _x( 'Commander', 'post type singular name' ),
            'add_new'            => _x( 'Add New', 'commander' ),
            'add_new_item'       => __( 'Add New Commander' ),
            'edit_item'          => __( 'Edit Commander' ),
            'new_item'           => __( 'New Commander' ),
            'all_items'          => __( 'All Commanders' ),
            'view_item'          => __( 'View Commander' ),
            'search_items'       => __( 'Search Commanders' ),
            'not_found'          => __( 'No Commanders found' ),
            'not_found_in_trash' => __( 'No Commanders found in the Trash' ), 
            'parent_item_colon'  => '',
            'menu_name'          => 'Commanders'
        );
        $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'commanders', 'with_front' => false),
        'query_var' => true,
        'menu_icon' => 'dashicons-share-alt',
        'supports' => array(
            'title',
            'editor',
            'custom-fields',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',),
        'show_in_rest' => true,
        'rest_base' => 'commanders',
        'rest_controller_class' => 'WP_REST_Posts_Controller'
        );
        register_post_type( 'commander', $args );
    }
    add_action( 'init', 'commander_custom_post_type' );