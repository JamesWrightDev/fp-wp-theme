<?php

function load_script(){

  
  wp_enqueue_style('style', get_template_directory_uri() . '/css/main.css', array(),'1.0.1','all');
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/app.js', array(), '1.0.0',true);
}

add_action('wp_enqueue_scripts','load_script');

?>