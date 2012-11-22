<?php
add_action('init', 'post_type_footer_account');
function post_type_footer_account(){

    $labels =array(
        'name' => _x('Footer Account','post type general name'),
        'singular_name' => _x('Footer','post type singular name'),
        'add_new' => _x('Add account','news item'),
        'add_new_item' => __('Add new account'),
        'edit_item' => __('Edit account'),
        'new_item' => __('New account'),
        'view_item' => __('View account'),
        'search_items' => __('Search account'),
        'not_found' => __('No account were found'),
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

    register_post_type('footer_account',$args);
}
