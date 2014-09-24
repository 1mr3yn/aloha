<?php
 
  function site_resources(){
     wp_enqueue_style('style', get_stylesheet_uri() );
     wp_enqueue_style('bootstrap.css' ,get_template_directory_uri() .'/tools/css/bootstrap.css' );
     wp_enqueue_style('fontaweome'    ,'//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');     
     wp_enqueue_script('jquery'       ,get_template_directory_uri() .'/tools/js/jquery-2.1.1.min.js');
     wp_enqueue_script('bootstrap.js' ,get_template_directory_uri() .'/tools/js/bootstrap.js');
    
  }

  add_action('wp_enqueue_scripts','site_resources');

  //Navigation Menus
    register_nav_menus(array(
          'primary' => __( 'Primary Menu'),
          'footer'  => __( 'Footer Menu')
      ));

?>