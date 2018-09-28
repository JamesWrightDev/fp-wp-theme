<!doctype html>
<html class="no-js" lang="">

<?php get_header();?>



<div class="container-fluid">
  <span class="hamburger col-md-9" style="" onclick="openNav()">&#9776;</span>

      <div id="mySidenav" class="sidenav">
      
      <?php 
        wp_nav_menu(array(
          'menu' => 'primary',
          'theme_location' => 'primary',
          'menu_class' => 'test'
  


        ));
      ?>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        
        <a href="#" onclick="closeNav()">CV</a>
        <a href="#contact" onclick="closeNav()">Contact</a>
    </div>
      <div class="row">
        <div class="col-xs-12 col-md-6 " >
          <div class='graphic'></div>
          <div class='graphic-2'></div>
           <h1 class="display-1">Fiona <br>Points</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12 col-xs-12">
          <h4 class="h4 copy">Copywriter</h4>
          
        </div>
      </div>
        <div class="col-offset-12 d-flex justify-content-center">
        
              <svg class='arrow' width="48" height="420" viewBox="0 0 48 420" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path d="M21.8787 418.121C23.0503 419.293 24.9497 419.293 26.1213 418.121L45.2132 399.029C46.3848 397.858 46.3848 395.958 45.2132 394.787C44.0416 393.615 42.1421 393.615 40.9706 394.787L24 411.757L7.02944 394.787C5.85786 393.615 3.95837 393.615 2.7868 394.787C1.61522 395.958 1.61522 397.858 2.7868 399.029L21.8787 418.121ZM21 0L21 416H27L27 0L21 0Z" fill="black"/>

              </svg>
        </div>

        
        <div class="row mb-5 ">
            <div class=" col-md-6 col-xs-12">
              <h4 class="h5 tagline-box">Good products sell themselves,I just help with the pitch</h4>
            </div>
          </div>
          <div class="row mb-5 d-flex justify-content-center">
            <div class="col-md-6 col-xs-10 ">
              <h4 class="text-center mt-5 mb-5 h4 copy">About me</h4>
              <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eu velit metus. Donec eget suscipit ipsum, ac vehicula felis. Nunc pellentesque ultricies lacus et finibus. Quisque in erat tempor, tristique libero at, consequat tellus. Sed ligula nibh, accumsan pretium gravida nec, bibendum nec urna.</p>
            </div>
          </div>
          <div class="row mb-5 d-flex justify-content-center">
            <div class="col-md-6 col-s-3 ">
              <a href="./portfolio"><h4 class="text-center pt-3 pb-3 h4 work copy">View My Work</h4></a>
            </div>
          </div>
            <div class="row mb-5 d-flex justify-content-center">
            <div class="col-md-6 col-xs-10 mb-5">
              <a name="contact">
              <h4 class="text-center mt-5 mb-5 h4 copy">Contact Me</h4>
              <!-- Contact Form -->

              <?php echo do_shortcode( '[contact-form-7 id="26" title="Contact Me"]' ); ?>
            </div>
          </div>
    
</div>






    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
 

<?php get_footer(); ?>