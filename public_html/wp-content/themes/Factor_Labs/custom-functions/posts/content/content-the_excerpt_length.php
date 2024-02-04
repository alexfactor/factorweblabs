<?php
/**
 * @package v1
 * Modifies `the_excerpt()` length
 * See: https://developer.wordpress.org/reference/functions/the_excerpt/#comment-325
 */

if (!function_exists('trim_excerpt_length')) {
    function trim_excerpt_length($length) {
        return 20;
    }
    add_filter( 'excerpt_length', 'trim_excerpt_length', 999 );
}