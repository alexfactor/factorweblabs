<?php 
/**
 * @package v1
 * Registers Global Main CSS for enqueuing in enqueue.php
 * Called in functions.php
 */

 if(!function_exists('enqueue_global_css_main')) {
    function enqueue_global_css_main() {
        $_mainStylesheetDirectory = '/assets/css/dist/main';
        wp_register_style('main-css', get_template_directory_uri() . $_mainStylesheetDirectory . '/main.min.css', array(), filemtime(get_template_directory() . $_mainStylesheetDirectory . '/main.min.css'));
        wp_enqueue_style('main-css');
    }
 }