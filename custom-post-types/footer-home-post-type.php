<?php
add_action('init', 'post_type_footer_home');
function post_type_footer_home(){

    $labels =array(
        'name' => _x('Footer Home','post type general name'),
        'singular_name' => _x('Footer','post type singular name'),
        'add_new' => _x('Add home','news item'),
        'add_new_item' => __('Add new home'),
        'edit_item' => __('Edit home'),
        'new_item' => __('New home'),
        'view_item' => __('View home'),
        'search_items' => __('Search home'),
        'not_found' => __('No home were found'),
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

    register_post_type('footer_home',$args);
}
