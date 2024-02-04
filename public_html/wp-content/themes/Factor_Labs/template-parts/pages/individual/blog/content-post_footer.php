<?php 
/**
 * @package v1
 * Content for the blog post footer
*/ ?>
<?php if (get_field('author_image')) { ?>
<section class="mmpad-wrapper">
	<div class="mmpad-author clearfix">
		<img class="mmpad-media" src="<?php the_field('author_image') ?>" />
		<p><?php the_field('author_bio') ?> </p>
	</div>
</section>
<?php } ?>
<section class="post-subscribe text-align-center clearfix">
<h4 class="widget-title"><?php echo __('Get the best from MakeMusic'); ?></h4>
		<p class="text-margin-bottom-1"><?php echo __('Discover practical music tips, delivered directly to you!'); ?></p>
		<a class="btn btn-sm btn-primary" href="/email-list" role="button"><?php echo __('Sign up'); ?></a>
</section>

<div class="social-container blog-social fade-full">
	<div class="social-icons">
		<a href="#facebook-blog" title="Share on Facebook" id="fb-anchor">
			<div class="icon-container facebook" id="facebook-blog">
				<img class="icon" src="//wpmedia.finalemusic.com/wp-content/uploads/2018/01/social-facebook.svg" alt="Facebook" width="12px" />
			</div>
		</a>
		<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!">
			<div class="icon-container twitter" id="twitter-blog">
				<img class="icon" src="//wpmedia.finalemusic.com/wp-content/uploads/2018/01/social-twitter.svg" alt="Twitter" width="21px" />
			</div>
		</a>
		<a href="<?php bloginfo('rss2_url'); ?>" target="_blank"  rel="noopener">
			<div class="icon-container feed" id="feed-blog">
				<img class="icon" src="//wpmedia.finalemusic.com/wp-content/uploads/2018/01/social-feed.svg" alt="RSS Feed" width="17px" />
			</div>
		</a>
		<script>
			document.getElementById('fb-anchor').addEventListener('click', function(e) {
				e.preventDefault();
			});
			document.getElementById('facebook-blog').addEventListener('click', function(e) {
				FB.ui({
					method: 'share',
					display: 'popup',
					href: '<?php the_permalink(); ?>',
					mobile_iframe: true,
				}, function(response){});
			});
		</script>
	</div>
</div>

<?php 
the_post_navigation( array(
	'prev_text'	=> __( 'Previous post' ),
	'next_text'	=> __( 'Next post' ),
) ); ?>