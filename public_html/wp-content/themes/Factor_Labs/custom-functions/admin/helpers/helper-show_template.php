<?php
/**
 * @package v1
 * Displays which page-* PHP template file is used by current page
 * Called in functions.php
 */

// Sets global var to template file name for later use
if (!function_exists('var_template_include')) {
    function var_template_include( $t ){
        $GLOBALS['current_theme_template'] = basename($t);
        return $t;
    }
    add_filter( 'template_include', 'var_template_include', 1000 );
}

// Use this function to determine page template (called in <footer>)
if (!function_exists('get_current_template')) {
    function get_current_template( $echo = false ) {
        if( !isset( $GLOBALS['current_theme_template'] ) )
            return false;
        if( $echo )
            echo $GLOBALS['current_theme_template'];
        else 
            return $GLOBALS['current_theme_template'];
    }
}