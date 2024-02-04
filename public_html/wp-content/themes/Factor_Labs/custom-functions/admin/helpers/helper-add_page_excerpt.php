<?php
/**
 * @package v1
 * Adds excerpt support for the pages post type
 */

if (!function_exists('add_page_excerpt')) {
    function add_page_excerpt() {
        add_post_type_support('page', 'excerpt');
    }
    add_action('init', 'add_page_excerpt');
}