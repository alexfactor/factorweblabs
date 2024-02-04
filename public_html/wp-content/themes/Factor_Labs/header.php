<?php 
/**
 * @package v1
 * Template for the <header> used on all pages
 */

 get_template_part('/template-parts/global/head/head'); ?>

<body <?php body_class(); ?> ontouchstart="">

 <div id="page" class="site"> <?php // closed at start of footer.php ?>
	<?php get_template_part('/template-parts/global/header/header'); ?>
	<div id="content" class="page-wrap clearfix"> <?php // closed at end of page template ?>
