<?php
add_action('init', 'post_type_promotions');
function post_type_promotions(){
    $labels =array(
        'name' => _x('Promotions','post type general name'),
        'singular_name' => _x('Promotion','post type singular name'),
        'add_new' => _x('Add promotion','news item'),
        'add_new_item' => __('Add new promotion'),
        'edit_item' => __('Edit promotion'),
        'new_item' => __('New promotion'),
        'view_item' => __('View promotion'),
        'search_items' => __('Search for promotion'),
        'not_found' => __('No promotions were found'),
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
        'supports' => array('title','editor','thumbnail')
    );
    register_post_type('promotions',$args);
}

$promotions_meta_box = array(
    'id' => 'promotions-meta-box',
    'title' => 'Extra details for promotion',
    'page' => 'promotions',
    'context' => 'normal',
    'priority' => 'high',
    'fields' => array(
        array(
            'name' => 'Promotion position in banner',
            'desc' => 'Add a position for this promotions. It will be used to sort promotions in the homepage banner',
            'id' => 'banner_position',
            'type' => 'text',
            'std' => ''
        ),
        array(
            'name' => 'meta_box',
            'id' => 'meta_box',
            'type' => 'hidden',
            'std' => 'promotions_meta_box',
            'hide' => true
        ),
    )
);

function custom_promotions_add_box() {
    global $promotions_meta_box;
    add_meta_box($promotions_meta_box['id'], $promotions_meta_box['title'], 'default_meta_show_box', $promotions_meta_box['page'], $promotions_meta_box['context'], $promotions_meta_box['priority'],$promotions_meta_box['fields']);
}

add_action('admin_menu', 'custom_promotions_add_box');
