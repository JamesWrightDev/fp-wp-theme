<span class="hamburger col-md-12" style="" onclick="openNav()">&#9776;</span>

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
  <a href="#" onclick="closeNav()">Contact</a>
</div>