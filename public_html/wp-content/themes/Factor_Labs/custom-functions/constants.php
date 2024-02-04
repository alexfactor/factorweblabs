<?php
/**
 * @package v1
 */

class Theme_Constants {
    /**
     * Define API Namespace
     */
    public static function get_api_namespace() {
        $api_namespace = 'site-name/v1';
        return $api_namespace;
    }

    /**
     * Define if user has international IP address (outside US/CAN)
     */
    //public static function is_international_ip() {
        /* Country of origin */
       // if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
           // $country = $_SERVER['HTTP_CF_IPCOUNTRY'];
       // }
        // Defined in wp-config.php, from Cloudflare
       // $is_international_ip = (isset($country) && ($country !== 'US') && ($country !== 'CA'));

       // return $is_international_ip;
   // }

    /**
     * Define if request page is blog page
     */
    public static function is_blog_page() {
        $is_blog_page = ( is_single() || is_home() || is_archive() );

        return $is_blog_page;
    }

    /**
     * Define blog title for use on blog, archive, and single post pages
     */
    public static function get_blog_title() {
        $title = 'Blog Title (edit in Constants.php)';

        return $title;
    }

    /**
     * Define if page is allowed to use normal banner image (content-banner.php)
     */
    public static function is_allowed_normal_banner_image() {

        if ( self::is_blog_page() || self::has_modified_banner_image() || is_404() || is_search() ) {
            $is_allowed_normal_banner_image = false;
        } else {
            $is_allowed_normal_banner_image = true;
        }

        return $is_allowed_normal_banner_image;
    }

    /**
     * Define if page has custom fields that modify banner image
     */
    public static function has_modified_banner_image() {
        global $post;

        $post_options = get_post_custom( $post->ID );
        $modified_banner_options = array(
            'sm_featured_image_above_title',
            'sm_featured_image_below_title',
        );
        $is_modified_banner_image = false;

        if ( !is_array( $post_options ) ) {
            return $is_modified_banner_image = false;
        }

        foreach( $modified_banner_options as $option ) {
            if ( array_key_exists( $option, $post_options ) ) {
                $is_modified_banner_image = true;
            }
        }

        return $is_modified_banner_image;
    }
}