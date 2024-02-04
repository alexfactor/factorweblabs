<?php 
/**
 * @package v1
 * Template for the <head>
 */  ?>

 <html <?php language_attributes(); ?>>
 <head>
    <meta charset="<?php bloginfo( 'charset'); // UTF-8 ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?></title>

    <!--Google Consent Mode -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JPBJJ8K3S5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JPBJJ8K3S5');
</script>

    <!-- Icon Graphics for tab bar --> 

    <?php wp_head(); ?>

</head>