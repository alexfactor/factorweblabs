<?php
/**
 * @package v1
 * Registers Image Carousel
 * Called in functions.php
 */
?>

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <style>
   .carousel-inner {
     object-fit: cover;
     height: auto;
     max-height: 650px;
   }
 </style>
   <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
   <ol class="carousel-indicators">
     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
   </ol>
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img class="d-block w-100" src="<?php the_field('carousel_image_1')?>" alt="<?php the_field('image_1_alt')?>">
     </div>
     <div class="carousel-item">
       <img class="d-block w-100" src="<?php the_field('carousel_image_2')?>" alt="<?php the_field('image_2_alt')?>">
     </div>
     <div class="carousel-item">
       <img class="d-block w-100" src="<?php the_field('carousel_image_3')?>" alt="<?php the_field('image_3_alt')?>">
     </div>
     <div class="carousel-item">
       <img class="d-block w-100" src="<?php the_field('carousel_image_4')?>" alt="<?php the_field('image_4_alt')?>">
     </div>
   </div>
   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </a>
 </div>
  <script>
  ('.carousel').carousel({
   interval: 2000
 });
  </script>