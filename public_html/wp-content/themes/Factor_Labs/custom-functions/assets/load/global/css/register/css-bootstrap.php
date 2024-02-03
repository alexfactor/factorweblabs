<?php 
/**
 * @package v1
 * Registers Global Bootstrap CSS for enqueuing in enqueue.php
 * Called in functions.php
 */

 if(!function_exists('enqueue_global_css_bootstrap')) {
    function enqueue_global_css_bootstrap() {
        $_mainStylesheetDirectory = '/assets/css/dist/bootstrap';
        wp_register_style('bootstrap-css', get_template_directory_uri() . $_mainStylesheetDirectory . '/bootstrap.min.css', array(), filemtime(get_template_directory() . $_mainStylesheetDirectory . '/bootstrap.min.css'));
        wp_enqueue_style('bootstrap-css');
    }
 }