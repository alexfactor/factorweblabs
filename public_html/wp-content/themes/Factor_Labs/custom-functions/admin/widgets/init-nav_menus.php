<?php
/**
 * @package v1
 * Registers menus for <nav> (header) and <footer>
 * Called in functions.php
 */

 if (!function_exists('init_theme_nav_menus')) {
    function init_theme_nav_menus() {
        register_nav_menus( array(
            'primary_menu'   => __( 'Header Nav Menu', 'v1' ),
            'utility_menu'   => __( 'Utility Menu', 'v1' ),
            'footer_menu_1'  => __( 'Footer Menu 1', 'v1' ),
            'footer_menu_2'  => __( 'Footer Menu 2', 'v1' ),
            'footer_menu_3'  => __( 'Footer Menu 3', 'v1' ),
            '404_menu'       => __( '404 Menu', 'v1')
        ) );
    }
    add_action( 'after_setup_theme', 'init_theme_nav_menus', 0 );
 }