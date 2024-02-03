<?php
/**
 * @package v1
 * Contents of single blog post
 */ ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post-header">

        <?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
        
		<div class="post-meta">
			<?php theme_post_meta();
            $facebook_date = new DateTime("2017-05-18"); 
            $formatted_facebook_date = strtotime($facebook_date->format("Y-m-d")); 
            $postDate = strtotime(get_the_date());

            if ($postDate >= $formatted_facebook_date) { ?>
            <div style="display: block;">
                <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false" data-kid-directed-site="true"></div>
            </div>
            <?php } ?>
        </div>
	</header>

	<section class="post-content spacing-md-bottom">
        <?php if (has_post_thumbnail()) { ?>
        <div class="post-thumbnail">
        <?php if (wp_is_mobile()) { 
            the_post_thumbnail('large'); 
        } else {
            the_post_thumbnail('full');
        } ?>
        </div>
        <?php } ?>

		<?php the_content(); ?>
    </section>

	<footer class="post-footer">
        <?php
        get_template_part('template-parts/pages/individual/blog/content', 'post_footer');
		get_template_part('template-parts/pages/individual/blog/content', 'blog_email_subscribe'); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->