<?php 
/**
 * @package v1
 * Enqueues all CSS into <head>
 * Called in functions.php
 */

 require_once 'register/css-bootstrap.php';
 require_once 'register/css-main.php';


 add_action('wp_enqueue_scripts', 'enqueue_global_css_bootstrap', 1); 
 add_action('wp_enqueue_scripts', 'enqueue_global_css_main', 2); 
