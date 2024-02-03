<?php
/**
* The template for the top <nav>
* @package Factor Labs
*/ ?>
<style>
    </style>


<nav class="nav-header nav-scrolling" role="menubar">
<div class="container-fluid mx-5 p-3">
<div class="row">
<div class="col-lg-3 col-8"><a href="/" target="_blank" rel="noopener">
<a class="site-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo('name'); ?>"><figure title="Factor Web Labs Homepage"><figcaption class="sr-only">Home</figcaption></figure></a>
</div> 
<div class="col-lg-7 offset-lg-0 offset-2 force-inline-left mm-nav">
<div class="col-2 mobile-menu-controls">
            <a role="button" href="#" class="menu-toggle icon-toggle" data-toggle="#menu-header-wrapper" data-action="open"><span class="hamburger-menu" data-icon></span><span class="sr-only">Main menu</span></a>
        </div>
<?php wp_nav_menu( array( 
            'theme_location' => 'primary_menu', 
            'container_class' => 'menu-header-container',
            'container_id' => 'menu-header-wrapper',
            'fallback_cb' => false            
        ) ); ?>
</div>
</div>
</div>
</nav>