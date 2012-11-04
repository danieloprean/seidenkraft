<?php
add_action('init', 'post_type_banners');
function post_type_banners(){

    $labels =array(
        'name' => _x('Banners','post type general name'),
        'singular_name' => _x('Banner','post type singular name'),
        'add_new' => _x('Add banner','news item'),
        'add_new_item' => __('Add new banner'),
        'edit_item' => __('Edit banner'),
        'new_item' => __('New banner'),
        'view_item' => __('View banner'),
        'search_items' => __('Search for banner'),
        'not_found' => __('No banners were found'),
        'not_found_in_trash' => __('Nothing found in Trash'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => false,
        'publicly_queryable' => false,
        'show_ui' => true,
        'query_var' => true,
        'menu_icon' => '',
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','excerpt','thumbnail')
    );

    register_post_type('banners',$args);
}
