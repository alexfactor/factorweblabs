<?php
/**
 * @package v1
 * Adds theme support for featured images on pages
 * Called in functions.php (yeah it's a little silly to have all this for one line of code)
 */

add_theme_support( 'post-thumbnails' );
add_image_size('blogfeed' , 680, 622, array('left', 'top'));
