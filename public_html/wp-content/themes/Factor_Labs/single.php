<?php
/**
 * @package v1
 * The template for displaying all single posts
 */ ?>
<style>
	.site-banner {
		height: 0px;
	}
</style>

<?php get_header(); ?>
<
<div class="container-fluid">
	<div class="row">
		<div class="content-area col-lg-12" style="padding-left: 0; padding-right: 0;" id="primary">
			<main class="site-main posts-feed-wrap" id="main" role="main">
 
			<?php 
			if ( have_posts() ) { 

				while (have_posts()) {
					the_post();
					get_template_part('template-parts/pages/individual/blog/content', 'post');
				} ?>

				<script type="text/javascript">
					(function() {
						var blogMenuOption = document.getElementById('menu-item-19005');
						blogMenuOption.setAttribute( 'class', 'current-menu-item' );
					})();
				</script>
				
			<?php	
			} else {
					
				get_template_part( 'template-parts/pages/individual/blog/content', 'none' );
				
			} ?>

			</main>
		</div>

	</div>
</div>

<?php get_footer(); ?>