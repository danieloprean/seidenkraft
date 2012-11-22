<?php
add_action('init', 'post_type_footer_media');
function post_type_footer_media(){

    $labels =array(
        'name' => _x('Footer media','post type general name'),
        'singular_name' => _x('Footer','post type singular name'),
        'add_new' => _x('Add media','news item'),
        'add_new_item' => __('Add new media'),
        'edit_item' => __('Edit media'),
        'new_item' => __('New media'),
        'view_item' => __('View media'),
        'search_items' => __('Search media'),
        'not_found' => __('No media were found'),
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
        'medias' => array('title','excerpt','editor','thumbnail')
    );

    register_post_type('footer_media',$args);
}
