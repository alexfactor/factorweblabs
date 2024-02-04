<?php 
/**
 * @package v1
 * Template for the footer <nav>
 */  ?>

 <section class="footer-widget row">
  <div class="col-lg-4 col-md-6 col-12">
    <?php
    //Left Menu items
    wp_nav_menu(array(
      'theme_location' => 'footer_menu_1',
      'container_class' => 'menu-footer-container',
      'container' => 'nav',
      'fallback_cb' => false
    ));
    ?>
    </div>
    <div class="col-lg-4 col-md-6 col-12">
    <?php
    //Left Menu items
    wp_nav_menu(array(
      'theme_location' => 'footer_menu_2',
      'container_class' => 'menu-footer-container',
      'container' => 'nav',
      'fallback_cb' => false
    ));
    ?>
    </div>
    <div class="col-lg-4 col-12">
    <?php
    //Left Menu items
    wp_nav_menu(array(
      'theme_location' => 'footer_menu_3',
      'container_class' => 'menu-footer-container',
      'container' => 'nav',
      'fallback_cb' => false
    ));
    ?>
    </div>
 </section>