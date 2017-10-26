<!DOCTYPE html>
<html <?php language_attributes(); global $portfolio_master; ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- Header Area Start -->
    <header class="header-section ">
      <div class="header-area">
        <nav class="navbar navbar-default">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
              <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo $portfolio_master['site_logo_1']['url']; ?>" alt=""></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <div class="main-menu">
              <?php 
                  wp_nav_menu(array(
                    'theme_location' => 'blog_menu',
                    'fallback_cb' => 'portfolio_master_fallback_menu',
                    'container' => '',
                    'menu_class' => 'nav navbar-nav navbar-right',

                  )); 
                ?>  
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--/.Header Area End -->