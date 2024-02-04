<?php 
/**
 * @package v1
 * Registers Theme JS for enqueueing in enqueue.php
 * Called in functions.php
 */

if (!function_exists('enqueue_global_js_bootstrap')) {
    
    function enqueue_global_js_bootstrap() {
        $_themeScriptsDirectory = '/assets/js/dist/bootstrap';
        // bootstrap JS used for all pages
        wp_register_script('bootstrap-js', get_template_directory_uri() . $_themeScriptsDirectory .'/bootstrap.min.js', array(), filemtime(get_template_directory() . $_themeScriptsDirectory . '/bootstrap.min.js'), true);
        wp_enqueue_script('bootstrap-js');
    }
}
?>