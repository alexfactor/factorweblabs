<?php
/**
 * @package v1
 * The template for the <header>
 */ ?>

<header class="site-header">
    <?php get_template_part('/template-parts/global/header/nav/nav'); ?>
    <?php 
    $has_banner = false;
    $is_IE11 = preg_match('/(?:msie|trident)/i', $_SERVER['HTTP_USER_AGENT']);
    if ( Theme_Constants::is_allowed_normal_banner_image() && has_post_thumbnail($post->ID) ) {
        $has_banner = true;
        $banner_img_full = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full" );
        $banner_img_mobile = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" );
        /**
         * Set banner height depending on height of queried full size image
         * Full size is used here because aspect ratio may(?) be different if we use the "large" size, ("full" is trustworthy)
         */
        if ($banner_img_full[2] > 1000) {
            $banner_height = '650px';
        } else {
            $banner_height = '350px';
        }

        /** 
         * Agent detection to load smaller images for mobile without need for JS
         * Inline styles necessary to give DB access to banner image (featured image in wp-admin)
         */
        if (wp_is_mobile()) {
            // mobile ?>
            <style>
                .site-banner {
                    height: <?php echo $banner_height; ?>;
                    background-repeat: no-repeat;
                    background-position: 0% 0rem;
                    background-size: cover;
                    background-image: url('<?php echo $banner_img_mobile[0]; ?>');
                }
            </style>
        <?php } else {
            // desktop ?>
            <style>
                .site-banner {
                    height: <?php echo $banner_height; ?>;
                    background-repeat: no-repeat;
                    background-position: 0% 0rem;
                    background-size: cover;
                    background-image: url('<?php echo $banner_img_full[0]; ?>');
                    position: relative;
                }
            </style>
        <?php }
    }
          /*$homepage_banner = is_front_page() && get_field('banner_text');
          if ($homepage_banner) { ?>
            <section class="spacing-xl-top background-green"> 
            <div class="container text-align-center">
                <h5 style="margin-left:auto; margin-right:auto; margin-bottom: 1rem; color: #ffffff; line-height: 1.4;"><?php esc_html(the_field('banner_text')); ?></h5>
                <h6 class="text-align-center" style="color: #ffffff;"><?php esc_html(the_field('banner_sub_text'));?></h6>
                <div class="spacing-xs">
                 <?php if (get_field('banner_button_text')) {?>
                    <div class="spacing-xs-bottom">
                        <a class="btn btn-lg btn-primary btn-width-std btn-block btn-center-h" style="border-color: #ffffff;" role="button" href="<?php esc_html(the_field('banner_button_link')); ?>"><?php esc_html(the_field('banner_button_text')); ?></a>
                    </div>
                 </div> <?php } ?>
          </div>
          </section>
     <?php }*/ ?>
    <section class="site-banner <?php if ($has_banner) { echo 'has-banner-image'; if ($is_IE11 != 0) { echo ' site-banner-block'; } } ?>" role="banner">
        <?php
        if ($has_banner) {
            get_template_part('template-parts/global/header/content/content', 'banner');
        } else {
            get_template_part('template-parts/global/header/content/content', 'no_banner');
        }
        ?>
    </section>
</header>