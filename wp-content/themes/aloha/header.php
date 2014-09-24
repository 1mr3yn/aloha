<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
       <meta charset="<?php bloginfo('charset'); ?>">
       <meta name="viewport" content="width=device-width">
       <title><?php bloginfo('name'); ?></title>

       <?php wp_head();?>
   </head>
<body <?php body_class();?>>
    
   <!-- site-header -->
   <header class="header" >
     <nav class="navbar navbar-fixed-top" role="navigation">
         <div class="navbar top-header">          
            <ul class="nav navbar-nav">
                <li><span class="glyphicon glyphicon-home"></span> <span class="top-header-text">Station 2, Sunset Road, Boracay Island, Malay, Aklan, Philippines</span></li> 
                <li><span class="glyphicon glyphicon-earphone"></span> <span class="top-header-text">63.36.288.1210</span> </li>
                <li><span class="glyphicon glyphicon-envelope"></span> <span class="top-header-text">reservations@alohaboracayhotel.com</span></li>
               </li>
            </ul>
         </div>  

         <div class="container main-menu">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html">
                   <img src="<?php echo get_template_directory_uri(); ?>/tools/images/logo.png" class='img-responsive'/>
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="career.html">Career</a></li>
                            <li><a href="blog-item.html">Blog Single</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="registration.html">Registration</a></li>
                            <li class="divider"></li>
                            <li><a href="privacy.html">Privacy Policy</a></li>
                            <li><a href="terms.html">Terms of Use</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li> 
                    <li><a href="contact-us.html">Contact</a></li>
                </ul>
            </div>
        </div>
          
              

       <!--  <div class="container main-menu">
            <div id="header-image">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo('name') ); ?>" rel="home">
                <img src="<?php echo get_template_directory_uri(); ?>/tools/images/logo.png" class='img-responsive'/>
             </a>
           </div>    
        </div> -->
   
           <?php
                // $args = array('theme_location' => 'primary');
                // wp_nav_menu($args);
            ?>
      </nav>
   </header>

