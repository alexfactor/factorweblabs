<?php 
/**
 * @package v1
 * Content for header without banner image (featured image)
 * 
 * 
 */ 

$blog_title = Theme_Constants::get_blog_title(); ?>
<style>
.arrow {
  border: solid #000;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 10px;
  margin-right: 10px;
}
.left {
  transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
}
</style>

<div class="container">
    <?php
    if (Theme_Constants::is_blog_page()) {

        if (is_tax()) { ?>

            <h1 class="text-color-black site-title"><?php echo the_archive_title(); ?></h1>

            <?php                
            } else {  ?>
            <div class="row">
                <div class="col-lg-12 text-align-center">                
                    <h1 class="text-color-blue site-title has-subheader"><?php 
                        if (is_archive()) {
                            echo __('<a href="/blog">' . $blog_title . '</a>');
                        } else if (is_home()) {
                            echo __($blog_title); 
                        } ?></h1>
                    <h2 class="subheader text-color-gray-primary"><?php
                        if (is_archive()) {
                            echo the_archive_title();
                        } else if (is_home()) {
                            echo __(''); 
                        } ?></h2>
                </div>
            </div>

        <?php
    }

    } else {

        if (is_search()) { 


        } else {

            $has_subheader = (get_post_meta( $post->ID, 'mm_subheader', true )) ? true : false;
            $has_centered_title = (get_post_meta( $post->ID, 'mm_center_title', true)) ? true : false;

            if (Theme_Constants::has_modified_banner_image() && get_post_meta( $post->ID, 'mm_featured_image_above_title', true )) { ?>
                <div class="spacing-md-top">
                    <?php
                    if (wp_is_mobile()) { 
                        the_post_thumbnail('large'); 
                    } else {
                        the_post_thumbnail('full');
                    } ?>
                </div>
            <?php
            }

            if ($has_subheader) { ?>

                <h1 class="text-color-black site-title has-subheader<?php if ($has_centered_title) { echo ' text-align-center'; } ?>"><?php the_title(); ?></h1>
                <h2 class="subheader text-color-gray-secondary<?php if ($has_centered_title) { echo ' text-align-center'; } ?>"><?php echo esc_html(get_post_meta( $post->ID, 'mm_subheader', true )); ?></h2>
                
            <?php 
            } else { ?>
            
                <h1 class="text-color-black site-title text-align-center<?php if ($has_centered_title) { echo ' text-align-center'; } ?>"><?php 
                    if (!is_404()) { 
                        the_title(); 
                    } else {
                        echo __('oops!');
                    } ?></h1>

            <?php 
            }

            if ( Theme_Constants::has_modified_banner_image() && get_post_meta( $post->ID, 'mm_featured_image_below_title', true ) ) {
                if (wp_is_mobile()) { 
                    the_post_thumbnail('large'); 
                } else {
                    the_post_thumbnail('full');
                }
            }
        }
    } ?>
</div>