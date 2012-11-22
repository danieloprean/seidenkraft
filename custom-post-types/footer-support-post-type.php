<?php
add_action('init', 'post_type_footer_support');
function post_type_footer_support(){

    $labels =array(
        'name' => _x('Footer Support','post type general name'),
        'singular_name' => _x('Footer','post type singular name'),
        'add_new' => _x('Add support','news item'),
        'add_new_item' => __('Add new support'),
        'edit_item' => __('Edit support'),
        'new_item' => __('New support'),
        'view_item' => __('View support'),
        'search_items' => __('Search support'),
        'not_found' => __('No support were found'),
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
        'hierarchical' => true,
        'menu_position' => null,
        'supports' => array('title','excerpt','editor','thumbnail')
    );

    register_post_type('footer_support',$args);
}
