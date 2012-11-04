<?php
add_action('init', 'post_type_news');
function post_type_news(){

    $labels =array(
        'name' => _x('News','post type general name'),
        'singular_name' => _x('News item','post type singular name'),
        'add_new' => _x('Add news','news item'),
        'add_new_item' => __('Add new news item'),
        'edit_item' => __('Edit news item'),
        'new_item' => __('New item'),
        'view_item' => __('View item'),
        'search_items' => __('Search news item'),
        'not_found' => __('No news were found'),
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

    register_post_type('news',$args);
}
