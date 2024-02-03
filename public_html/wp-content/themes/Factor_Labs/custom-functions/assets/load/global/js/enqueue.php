<?php 
/**
 * @package v1
 * Enqueues all JS into <head> or <footer>, depending on the file
 * See individual js-*.php files in directory for head/footer designations
 * Called in functions.php
 */

//require_once 'register/js-vendor.php';
require_once 'register/js-main.php';
require_once 'register/js-bootstrap.php';

if (!function_exists('add_defer_attribute')) { //TODO is it really worth it?
    function add_defer_attribute($tag, $handle) {
        // add script handles to the array below
        if (is_home() || is_single() || is_archive() || is_search() || is_admin()) {
            return $tag;
        } else {
            return str_replace(' src', ' defer="defer" src', $tag);
        }        
    }
    add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);
}

add_action( 'wp_enqueue_scripts', 'enqueue_global_js_main', 2); //js-base.php
add_action( 'wp_enqueue_scripts', 'enqueue_global_js_bootstrap', 2); //js-bootstrap.php