<?php 
/**
 * @package v1
 * Sets blog post meta information (author, date)
 */

if (!function_exists('theme_post_meta')) {
    function theme_post_meta() {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
        }

        $time_string = sprintf( $time_string,
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( 'c' ) ),
            esc_html( get_the_modified_date() )
        );

        $posted_on = sprintf(
            _x( '%s', 'post date', 'spend management' ),
            $time_string
        );

        $byline = sprintf(
            _x( '%s', 'post author', 'spend management' ),
            '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author_meta( 'display_name' ) ) . '</a></span>'
        );

        echo 'Written by: <span class="posted-on">' . $posted_on . '</span><br><span class="byline">' . $byline . '</span>';
    }
}