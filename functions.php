<?php

define('PRODUCTION',false);
define('DEBUG',true);

require_once( 'external/config.php' );
require_once( 'external/utilities.php' );

require_once( 'post-loops/loops.php' );

add_action( 'after_setup_theme', 'theme_setup' );
if ( ! function_exists( 'theme_setup' ) ):
    function theme_setup() {
        add_editor_style();
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'automatic-feed-links' );
        register_nav_menus(array('primary' => 'Primary Navigation'));
        set_post_thumbnail_size( 140, 90, true );
		add_image_size('home-news-thumbnail', 143, 124, true);
        // add_image_size('banner-size', 940, 450, true);
    }
endif;

/**
 * Filters rss only to specific topics
 *
 * @return array
 */
function new_feed_request($qv) {
    if ( isset($qv['feed']) && !isset($qv['post_type'])){
        $qv['post_type'] = array('event','portfolio');
    }
    return $qv;
}
add_filter('request', 'new_feed_request');

//add_filter( 'body_class', 'add_slug_to_body_class' );

require_once( 'custom-post-types/news-post-type.php' );
require_once( 'custom-post-types/promotions-post-type.php' );
require_once( 'custom-post-types/banners-post-type.php' );
require_once( 'custom-post-types/alerts-post-type.php' );

/**
 * Add scripts via wp_head()
 *
 * @return void
 */
function script_enqueuer() {
    wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
    wp_enqueue_script( 'site' );

    wp_register_style( 'screen', get_template_directory_uri().'/style.css', '', '', 'screen' );
    wp_enqueue_style( 'screen' );
}
add_action( 'wp_enqueue_scripts', 'script_enqueuer' );

/***
 * used by custom post types build with the supplied model to construct the meta fields and box, based on the fields
 * described in the array supplied
 * it includes elements ready for html5
 *
 * @param $post     the post object
 * @param $meta_box the meta_box array used to build the meta attached for a custom post type
 */
function default_meta_show_box($post,$meta_box) {
    // Use nonce for verification
    echo '<input type="hidden" name="meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
    echo '<table class="form-table">';

    foreach ($meta_box['args'] as $field) {
        // get current post meta data
        $meta = get_post_meta($post->ID, $field['id'], true);

        if(!isset($field['hide']) || !$field['hide']){
            echo '<tr>',
                '<th style="width:20%"><label for="', $field['id'], '">', $field['name'], '</label></th>',
                '<td>';
        }
        switch ($field['type']) {

        case 'hidden':
            echo '<input type="hidden" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />';
            break;

        case 'time':
        case 'date':
        case 'text':
            echo '<input type="',$field['type'], '" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" />',
                '<br />', $field['desc'];
            break;

        case 'range':
            echo '<input type="range" name="', $field['id'], '" id="', $field['id'], '" value="', $meta ? $meta : $field['std'], '" size="30" style="width:97%" min="0" max="10"/>',
                '<br />', $field['desc'];
            break;

        case 'textarea':
            echo '<textarea name="', $field['id'], '" id="', $field['id'], '" cols="60" rows="4" style="width:97%">', $meta ? $meta : $field['std'], '</textarea>',
                '<br />', $field['desc'];
            break;

        case 'button':
            echo '<input type="button" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" />';
            break;

        case 'checkbox':
            $to_echo = '';
            if($meta == 1){
                $to_echo = 'CHECKED';
            }
            echo '<input type="checkbox" name="', $field['id'], '" id="', $field['id'], '"value="', $meta ? $meta : $field['std'], '" ', $to_echo,'/>';
            break;
        }

        echo  '<td>',
            '</tr>';
    }

    echo '</table>';
}

/**
 * saves meta data for a custom post type
 *
 * handles the $_POST data in order to save the meta information for the custom post types;
 * gets the array describing the fields in the custom post type from a $_POST element and for each field, it queries the
 * database for existing meta value and based on the case, it either updates the meta value with the new information or
 * removes the meta field from the database if the user supplied an empty value
 *
 * @param string the id of the post
 * @return void
 */
function save_data($post_id) {
    // verify nonce
    if (isset($_POST['meta_box_nonce']) && !wp_verify_nonce($_POST['meta_box_nonce'], basename(__FILE__))) {
        return $post_id;
    }

    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }

    // check permissions
    if (isset($_POST['post_type']) && $_POST['post_type'] == 'page') {
        if (!current_user_can('edit_page', $post_id)) {
            return $post_id;
        }
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }

    if( isset($_POST['meta_box'])){
        $metabox = $_POST['meta_box'];
        global $$metabox;

        //goes through all the fields in the array with the meta fields descriptions
        //and operates based on case on the previous meta values
        foreach (${$metabox}['fields'] as $field) {
            if ($field['type'] === 'connection') {
                updateConnections($field['connection'],$post_id,$_POST[$field['connection']]);
            } else {
                $old = get_post_meta($post_id, $field['id'], true);
                $new = $_POST[$field['id']];

                if ($new && $new != $old) {
                    update_post_meta($post_id, $field['id'], $new);
                } elseif ('' == $new && $old) {
                    delete_post_meta($post_id, $field['id'], $old);
                }
            }
        }
    }
}

add_action('save_post', 'save_data');

/**
 *
 */
function handle_message_me(){
    $nonce = $_POST['nonce'];
    if(wp_verify_nonce($nonce,'message_me')){
        $email_address = get_bloginfo('admin_email');

        if(empty($_POST['name']) || empty($_POST['email']) ||
            empty($_POST['message'])){
                echo false;exit();die();
            }

        $message = "New message from ".$_POST['name']." (".$_POST['email'].")
            :\n";
        $message .= $_POST['message'];
        echo mail($email_address,'New message from Seidenkraft contact form',$message);
        exit();die();
    }
}

add_action('wp_ajax_message_me','handle_email');
add_action('wp_ajax_nopriv_message_me','handle_email');



