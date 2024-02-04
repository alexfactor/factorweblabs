<?php 
/**
 * @package v1
 * Template for the <footer>
 */  ?>
<footer class="site-footer footer-usb pb-5 px-5">
<div class="container footer-widgets">
    <div class="row">
      <div class="col-12 py-1">
        <?php 
        //Social icons
        get_template_part('template-parts/global/footer/widgets/widgets');
        ?>
      </div>
      <!--<div class="col-lg-9 col-12">
        <?php 
        //Left Menus
        //get_template_part('template-parts/global/footer/nav/nav');
        ?>
      </div>-->
      <div class="col-12 pt-4 pt-lg-3">
        <p>Factor Web Labs</p>
        <p>Littleton, CO</p>
        <!--<p class="pt-6">© <?php echo date("Y")  ?> </p>-->
      </div>
    </div>
  </div>
</footer>