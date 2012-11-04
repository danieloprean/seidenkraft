<?php

if (DEBUG) {
    $wpdb->show_errors();
    define(‘WP_DEBUG’, true);
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    define(‘WP_DEBUG’, false);
    error_reporting(E_ALL);
    ini_set('display_errors', '0');
}
