<?php 
/**
 * @package v1
 * Registers Global JS for enqueueing in enqueue.php
 * Called in functions.php
 */

if (!function_exists('enqueue_global_js_main')) {
    
    function enqueue_global_js_main() {
        $_mainScriptsDirectory = '/assets/js/dist/main';
        // Base JS used for all pages
        wp_register_script('main-js', get_template_directory_uri() . $_mainScriptsDirectory .'/main.min.js', array('jquery'), filemtime(get_template_directory() . $_mainScriptsDirectory . '/main.min.js'), true);
        wp_enqueue_script('main-js');
    }
}