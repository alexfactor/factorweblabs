<?php 
/**
 * @package v1
 * General template for most pages (not front page, blog home, single posts, archive, 404, search if needed)
 * 
 */

 $has_normal_banner = Theme_Constants::is_allowed_normal_banner_image() && has_post_thumbnail( $post->ID );
 $has_lower_banner = Theme_Constants::has_modified_banner_image() && get_post_meta( $post->ID, 'mm_featured_image_below_title', true);
 
 get_header(); ?>
 
	 <div class="content-area" id="primary">
		 <main class="site-main <?php if ($has_normal_banner) { echo 'spacing-lg-top'; } else if ($has_lower_banner) {echo 'spacing-md-top'; } ?>" id="main" role="main">
 
			 <?php
			 if (have_posts()) {
				 while (have_posts()) {
					 the_post();
					 the_content();
				 }
			 } ?>
 
		 </main>
	 </div>
	 
 <?php get_footer(); ?>