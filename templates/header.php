<div class="container">
  
  <header class="banner" role="banner">
   
    <div class="top-bar">
      <a class="logo" href="<?php echo home_url(); ?>/"><img src="holder.js/250x50" alt="logo"></a>
      <nav class="nav-main" role="navigation">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
            endif;
          ?>
      </nav>
    <div class="clearfix"></div>
    </div>
    <div class="header-panel">
      <div class="legend span8">
          <h1>
            <?php echo roots_title(); ?>
          </h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
      </div>   
    </div>

  </header>