<?php 
/**
 * @package v1
 * Calls template part for <footer> and closes all remianing open tags
 */  ?>

</div><?php // closes #content ?>
		<?php get_template_part('template-parts/global/footer/footer'); //this is the real `<footer>` ?>
		</div><?php // closes #page ?>
	<?php wp_footer(); ?>
	</body>
</html>