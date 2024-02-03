<?php 
/**
 * @package v1
 * The main template file
 * This file is unused by any page and serves as a fallback
 */

get_header(); ?>

 <div class="container">
     <div class="row">
         <div class="content-area col-lg-9" id="primary">
             <main class="site-main posts-feed-wrap" id="main" role="main">
 
             <?php 
             if ( have_posts() ) { ?>
 
                 <div class="posts-layout">
                     <?php
                     while (have_posts()) {
                         the_post();
                         get_template_part('template-parts/pages/individual/blog/content', 'posts_feed');
                     } ?>
                 </div>
 
                 <?php 
                 the_posts_navigation( array(
                     'prev_text' => __( 'Older posts' ),
                     'next_text' => __( 'Newer posts' ),
                 ) ); 
                 
             } else {
                     
                 get_template_part( 'template-parts/pages/individual/blog/content', 'none' );
                 
             } ?>
 
             </main>
         </div>
 
         <?php if (have_posts()) { get_sidebar(); } ?>
     </div>
 </div>
 
 <?php get_footer(); ?>
 