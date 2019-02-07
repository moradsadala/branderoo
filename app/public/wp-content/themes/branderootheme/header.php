<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
   <meta charset="<?php bloginfo('charset');?>">
   <?php wp_head()?>
</head>
<body>
   <div class="container">   
      <!-- banner -->
      <!-- <div class='banner'>
         <div class='banner_photo' style= "background-image: url(<?php echo get_theme_file_uri('/images/background.jpg')?>)"> -->
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand logo" href="<?php echo site_url('') ?>">
               <h1><?php bloginfo('name') ?></h1>
               <p><?php bloginfo('description') ?></p>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <?php wp_nav_menu(array(
               'theme_location'=>'mainMenu', //must be registed in function.php
               'menu_class'=>'links',
               'depth'=>1 //to get first level in the menu only
               )); 
            ?>
            <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
               <!-- <ul class="navbar-nav links">
                  <li class="nav-item links-item active">
                  <a class="nav-link" href="<?php echo site_url('') ?>">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item links-item">
                  <a class="nav-link" href="<?php echo site_url('/about-us')?>">About us</a>
                  </li>
                  <li class="nav-item links-item">
                  <a class="nav-link" href="<?php echo site_url('/privacy-policy')?>">Privacy Policy</a>
                  </li>
                  <li class="nav-item links-item">
                  <a class="nav-link" href="<?php echo site_url('/our-brands')?>">Our Brands</a>
                  </li>
                  <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="#">Action</a>
                     <a class="dropdown-item" href="#">Another action</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                  </li>
               </ul> -->
            <!-- </div> -->
         </nav>
            
         <!-- </div> 
      </div> -->
      