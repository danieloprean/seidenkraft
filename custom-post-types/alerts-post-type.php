<?php
add_action('init', 'post_type_alerts');
function post_type_alerts(){

    $labels =array(
        'name' => _x('Alerts','post type general name'),
        'singular_name' => _x('Alert','post type singular name'),
        'add_new' => _x('Add alert','news item'),
        'add_new_item' => __('Add new alert'),
        'edit_item' => __('Edit alert'),
        'new_item' => __('New alert'),
        'view_item' => __('View alert'),
        'search_items' => __('Search alerts'),
        'not_found' => __('No alerts were found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => '',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','excerpt','editor','thumbnail')
    );

    register_post_type('alerts',$args);
}
