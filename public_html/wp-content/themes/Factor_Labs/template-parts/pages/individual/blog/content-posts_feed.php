<?php
/**
 * @package v1
 * Contents of blog post feed (used in loop)
 */ ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('posts-feed-item'); ?>>
	<div class="row">
		<div class="col-lg-11">
			<header class="post-header">
                <?php 

                the_title( sprintf( '<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url(get_permalink()) ), '</a></h2>' );
                
                if (get_post_type() =='post') { ?>
                <div class="post-meta">
                    <?php theme_post_meta(); 
                    $facebook_date = new DateTime("2017-05-18"); 
                    $formatted_facebook_date = strtotime($facebook_date->format("Y-m-d")); 
                    $postDate = strtotime(get_the_date());
                    
                     ?>
                </div>
				<?php } ?>
			</header>

			<section class="post-content">
                <?php if (has_post_thumbnail()) { ?>
                <div class="post-thumbnail">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php 
                    if (wp_is_mobile()) { 
                        the_post_thumbnail('large'); 
                    } else {
                        the_post_thumbnail('full');
                    } ?></a>
                </div>
                <?php } ?>
                    
                <?php the_theme_excerpt(); ?>
            </section>

            <footer class="post-footer clearfix">
                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo __('Read more...'); ?></a>
            </footer>
		</div>
	</div>
</article>