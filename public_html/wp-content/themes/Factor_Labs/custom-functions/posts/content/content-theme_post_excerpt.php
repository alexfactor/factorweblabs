<?php 
/**
 * @package v1
 * Copies capabilities of get_the_excerpt() and the_excerpt() to allow additional HTML and excerpt length
 */

// Modifies blog excerpt to allow HTML tags and custom length
if ( ! function_exists( 'theme_trim_excerpt' ) ) { 
    // Sets allowed HTML tags
    function theme_allowedtags() {
        return '<br>,<em>,<i>,<p>,<img>,<video>,<audio>'; 
    }

    // Sets custom length of ~40 words, but will trim to the end of the first paragraph if under 40 words
    function theme_trim_excerpt($theme_excerpt) {
        $raw_excerpt = $theme_excerpt;
        if ( '' == $theme_excerpt ) {

            $theme_excerpt = get_the_content('');
            $theme_excerpt = strip_shortcodes( $theme_excerpt );
            $theme_excerpt = apply_filters('the_content', $theme_excerpt);
            $theme_excerpt = str_replace(']]>', ']]&gt;', $theme_excerpt);
            $theme_excerpt = strip_tags($theme_excerpt, theme_allowedtags());

            //Set the excerpt word count and only break after sentence is complete.
            $excerpt_word_count = 25;
            $excerpt_length = apply_filters('excerpt_length', $excerpt_word_count); 
            $tokens = array();
            $excerptOutput = '';
            $count = 0;

            // Divide the string into tokens; HTML tags, or words, followed by any whitespace
            preg_match_all('/(<[^>]+>|[^<>\s]+)\s*/u', $theme_excerpt, $tokens);

            foreach ($tokens[0] as $token) { 

                if ($count >= $excerpt_length && preg_match('/[\?\.\!]\s*$/uS', $token)) { 
                    // Limit reached, continue until ? . or ! occur at the end
                    $excerptOutput .= trim($token);
                    break;
                }

                // Add words to complete sentence
                $count++;

                // Append what's left of the token
                $excerptOutput .= $token;
            }

            $theme_excerpt = trim(force_balance_tags($excerptOutput));
            return $theme_excerpt;   
        }
        return apply_filters('theme_trim_excerpt', $theme_excerpt, $raw_excerpt);
    }
}

// Gets the contents of the excerpt (does not display)
if (!function_exists('get_the_theme_excerpt')) {
    /**
     * Retrieves the excerpt.
     * @param int|WP_Post $post Optional. Post ID or WP_Post object. Default is global $post.
     * @return string Post excerpt.
     */
    function get_the_theme_excerpt( $post = null ) {
        $post = get_post( $post );
        if ( empty( $post ) ) {
            return '';
        }

        /**
         * Filters the retrieved post excerpt.
         * @param string $post_excerpt The post excerpt.
         * @param WP_Post $post Post object.
         */
        return apply_filters( 'get_the_theme_excerpt', $post->post_excerpt, $post );
    }
    remove_filter('get_the_theme_excerpt', 'wp_trim_excerpt');
    add_filter('get_the_theme_excerpt', 'theme_trim_excerpt'); 
}

// Display the excerpt.
if (!function_exists('the_theme_excerpt')) {
    function the_theme_excerpt() {
        /**
         * Filters the displayed post excerpt.
         * @see get_the_theme_excerpt()
         * @param string $post_excerpt The post excerpt.
         */
        echo apply_filters( 'the_theme_excerpt', get_the_theme_excerpt() );
    }
}