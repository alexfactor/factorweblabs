<?php
/**
 * @package v1
 * The blog home template file (posts page)
 */ ?>


<?php get_header(); ?>
<div>
<div class="container site-main posts-feed-wrap gx-5" id="main" role="main">
	<div class="row">
			<?php 
			wp_reset_query();
			if ( have_posts() ) { ?>
			<div class="col-12 my-3 text-color-blue blog-header">
				<h2>Blogs</h2>
			</div>

					<?php
					while (have_posts()) {
						the_post();
						get_template_part('template-parts/pages/individual/blog/content', 'posts_feed');
					} ?>

				<?php 
				the_posts_navigation( array(
					'prev_text' => __( 'Older posts' ),
					'next_text' => __( 'Newer posts' ),
				) ); 
				
			} else {
					
				get_template_part( 'template-parts/pages/individual/blog/content', 'none' );
				
			} ?>
	</div>
</div>
</div>
<?php get_footer(); ?>