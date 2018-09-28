<!-- // PORTFOLIO PAGE -->
<?php define( 'WP_USE_THEMES', false ); get_header(); ?>

<div class="container-fluid">
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
  <a href=".fp/index#contact" onclick="closeNav()">Contact</a>
</div>

  <div class="row">
    <div class="col-md-12">
      <h4 class="h4 copy">Portfolio</h4>
    </div>
  </div>
  <!-- <div class="row">
    <div class="col-md-2 mr-3 project-side">Project Details
    
    </div>
    <div class="col-md-9">
          <h4 class="project-title">Project Title</h4>
          <p>Nam nec mi feugiat, tincidunt ante sit amet, cursus lorem. Curabitur placerat feugiat elit. Mauris tempor interdum nisl eget varius. Nulla sit amet nibh dui. Ut tincidunt fringilla vestibulum. Nam sem tortor, elementum pharetra laoreet scelerisque, varius et sem. Etiam euismod leo pharetra varius fermentum. Proin eu feugiat orci. Morbi quis ligula tortor. Vestibulum posuere sapien libero, a posuere lorem elementum in. Nunc convallis mi vel consectetur ornare. In hac habitasse platea dictumst. Quisque dapibus, elit ac convallis accumsan, orci enim sodales nulla, id dictum leo risus eget elit. Aliquam in ipsum tellus. Quisque velit magna, dignissim vitae dignissim vel, fermentum vitae eros. Aliquam mattis nibh ut tellus sagittis, ac pulvinar ante gravida.</p>
          <p>Nam nec mi feugiat, tincidunt ante sit amet, cursus lorem. Curabitur placerat feugiat elit. Mauris tempor interdum nisl eget varius. Nulla sit amet nibh dui. Ut tincidunt fringilla vestibulum. Nam sem tortor, elementum pharetra laoreet scelerisque, varius et sem. Etiam euismod leo pharetra varius fermentum. Proin eu feugiat orci. Morbi quis ligula tortor. Vestibulum posuere sapien libero, a posuere lorem elementum in. Nunc convallis mi vel consectetur ornare. In hac habitasse platea dictumst. Quisque dapibus, elit ac convallis accumsan, orci enim sodales nulla, id dictum leo risus eget elit. Aliquam in ipsum tellus. Quisque velit magna, dignissim vitae dignissim vel, fermentum vitae eros. Aliquam mattis nibh ut tellus sagittis, ac pulvinar ante gravida.</p>
    </div>
  </div> -->
  <!-- Main Loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="row mb-5">
    <!-- Side Bar -->
    <div class="col-md-2 mr-3 project-side">
      <p>Client:</p>
      <em><?php echo get_post_meta($post->ID, 'client', true); ?></em>

    </div>
    <div class="col-md-9">
      <h4 class="project-title"><?php the_title() ?></h4>
      <p><?php the_content() ?></p>
    </div>
  </div>
  <?php endwhile; else : ?>
  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
</div>


<?php get_footer();?>